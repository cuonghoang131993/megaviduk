<?php
// api/UserController.php

class UserController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getUserByEmail(string $email) {
        return $this->userService->getUserByEmail($email);
    }

    // Add other API methods like createUser, updateUser, deleteUser
    public function login($email, $password)
    {
        return $this->userService->login($email, $password);
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }
}

?>
