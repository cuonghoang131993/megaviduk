<?php

class Container
{
    private array $definitions = [];
    private array $instances = [];

    /**
     * Registers a service or a factory function with the container.
     *
     * @param string $id The unique identifier for the service.
     * @param callable|string $definition A callable (factory) or a class name.
     */
    public function register(string $id, callable|string $definition): void
    {
        $this->definitions[$id] = $definition;
    }

    /**
     * Resolves and returns an instance of the requested service.
     *
     * @param string $id The unique identifier of the service to resolve.
     * @return object The resolved service instance.
     * @throws Exception If the service cannot be resolved.
     */
    public function get(string $id): object
    {
        if (isset($this->instances[$id])) {
            return $this->instances[$id]; // Return existing instance if singleton
        }

        if (!isset($this->definitions[$id])) {
            throw new Exception("Service '{$id}' not found in container.");
        }

        $definition = $this->definitions[$id];

        if (is_callable($definition)) {
            $instance = $definition($this); // Pass container for resolving dependencies
        } elseif (is_string($definition) && class_exists($definition)) {
            $reflector = new ReflectionClass($definition);
            $constructor = $reflector->getConstructor();

            if (is_null($constructor)) {
                $instance = new $definition();
            } else {
                $dependencies = [];
                foreach ($constructor->getParameters() as $parameter) {
                    $type = $parameter->getType();
                    if ($type instanceof ReflectionNamedType && !$type->isBuiltin()) {
                        $dependencies[] = $this->get($type->getName()); // Recursively resolve dependencies
                    } else {
                        // Handle other parameter types (e.g., scalar values or default values)
                        // This example assumes all dependencies are resolvable services.
                        throw new Exception("Cannot resolve parameter '{$parameter->getName()}' for service '{$id}'.");
                    }
                }
                $instance = $reflector->newInstanceArgs($dependencies);
            }
        } else {
            throw new Exception("Invalid definition for service '{$id}'.");
        }

        $this->instances[$id] = $instance; // Store as singleton
        return $instance;
    }
}
