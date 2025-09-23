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
        try {
            return $this->userService->getUserByEmail($email);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    // Add other API methods like createUser, updateUser, deleteUser
    public function login($email, $password)
    {
        try {
            return $this->userService->login($email, $password);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}

?>
