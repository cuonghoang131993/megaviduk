<?php
// config.php or database.php

return [
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST') || 'localhost',
    'port'      => getenv('DB_PORT') || '3306', // Default MySQL port
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
];
?>