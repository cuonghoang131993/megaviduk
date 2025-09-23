<?php
// api/repositories/UserRepository.php

class UserRepository
{
    private $db; // PDO object or database connection

    public function __construct(DatabaseConnection $db)
    {
        $this->db = $db;
    }

    public function findByEmail(string $email)
    {
        // $this->db->query('SELECT * FROM users WHERE id = :id');
        // $this->db->bind(':id', $id);
        // return $this->db->single();
        return [
            'id'    => 1,
            'email' => 'testuser@gmail.com'
        ];
    }

    // Add other CRUD methods like save, update, delete
    public function login($email, $password)
    {
        if ($email === 'testuser@gmail.com' && $password === 'password123') {
            return true;
        } else {
            return false;
        }
    }
}
