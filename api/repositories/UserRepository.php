<?php
// app/repositories/UserRepository.php

class UserRepository {
    private $db; // PDO object or database connection

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function findById(int $id) {
        $db->query('SELECT * FROM users WHERE id = :id');
        $db->bind(':id', $id);
        return $db->single();
    }

    // Add other CRUD methods like save, update, delete
}
?>
