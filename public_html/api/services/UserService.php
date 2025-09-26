<?php
// api/services/UserService.php

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserByEmail(string $email) {
        return $this->userRepository->findByEmail($email);
    }

    // Add other business logic methods
    public function login($email, $password)
    {
        return $this->userRepository->login($email, $password);
    }
}

?>
