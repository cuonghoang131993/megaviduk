<?php

class Database {
    private $pdo;
    private $stmt;
    private $error;

    public function __construct() {
        // Load database configuration
        require_once __DIR__ . 'config/database.php';

        try {
            $dsn = "mysql:host=" . $config['host'] . ";dbname=" . $config['database'] . ";charset=" . $config['charset'];

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $this->pdo = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // public function getConnection() {
    //     return $this->connection;
    // }

    // Prepare statement
    public function query($sql) {
        $this->stmt = $this->pdo->prepare($sql);
    }

    // Bind values
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute the prepared statement
    public function execute() {
        return $this->stmt->execute();
    }

    // Get result set as array of objects
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Get single record as object
    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get row count
    public function rowCount() {
        return $this->stmt->rowCount();
    }
}
?>

<!-- 
How to use the class:
Instantiate the class.
Mã

    $db = new Database();
Perform a query.
Mã

    $db->query('SELECT * FROM users WHERE id = :id');
    $db->bind(':id', 1);
    $user = $db->single();
    print_r($user);
Insert data.
Mã

    $db->query('INSERT INTO users (name, email) VALUES (:name, :email)');
    $db->bind(':name', 'John Doe');
    $db->bind(':email', 'john@example.com');
    $db->execute();
    echo "User inserted successfully!";
-->
