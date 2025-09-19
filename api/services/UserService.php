<?php
// app/services/UserService.php

class UserService {
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getUserById(int $id) {
        // Implement business logic here, e.g., validation, authorization
        return $this->userRepository->findById($id);
    }

    // Add other business logic methods
}
?>