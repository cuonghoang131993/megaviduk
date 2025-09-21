<?php
// config.php or database.php

return [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'port'      => '3306', // Default MySQL port
    'database'  => 'DB_NAME',
    'username'  => 'DB_USER',
    'password'  => 'DB_PASS',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'pdo_options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ],
];
