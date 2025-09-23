<?php

ini_set("session.cookie_httponly", True);
session_start();

require_once('DI/Container.php');
require_once('controllers/UserController.php');
require_once('services/UserService.php');
require_once('repositories/UserRepository.php');
require_once('infrastructures/db/Database.php');

$container = new Container();
// Register a simple service (class name)
$container->register('DatabaseConnection', function () {
    $c = include 'infrastructures/config/database.php';
    return new DatabaseConnection("mysql:host=" . $c['host'] . ";dbname=" . $c['database'] . ";charset=" . $c['charset']);
});
// Register a service with a dependency
$container->register('UserRepository', UserRepository::class);
$container->register('UserService', UserService::class);
$container->register('UserController', UserController::class);

// Resolve and use the service
$userController = $container->get('UserController');

header('Content-Type: application/json');

// Get the raw POST data
$json_data = file_get_contents('php://input');

// Decode the JSON data into a PHP array or object
$data = json_decode($json_data, true); // true for associative array

if (is_array($data)) {
    $email = $data['login']['mail'];
    $password = $data['login']['password'];

    try {
        $isAuthenticated = $userController->login($email, $password);
        if ($isAuthenticated) {
            $userController->saveUserSession($email);

            echo json_encode(['status' => 'customer']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'User not found']);
        }
    }
    catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
