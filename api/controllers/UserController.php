<?php
// api/UserController.php

class UserController {
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getUser(int $id) {
        try {
            $user = $this->userService->getUserById($id);
            if ($user) {
                header('Content-Type: application/json');
                echo json_encode(['status' => 'success', 'data' => $user]);
            } else {
                http_response_code(404);
                echo json_encode(['status' => 'error', 'message' => 'User not found']);
            }
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    // Add other API methods like createUser, updateUser, deleteUser
}
?>
