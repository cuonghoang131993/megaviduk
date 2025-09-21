<?php
// api/repositories/UserRepository.php

class UserRepository
{
    private $db; // PDO object or database connection

    public function __construct(DatabaseConnection $db)
    {
        $this->db = $db;
    }

    public function findById(int $id)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    // Add other CRUD methods like save, update, delete
}
