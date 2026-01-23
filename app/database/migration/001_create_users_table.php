<?php

return [
    "up" => "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(100) UNIQUE,
            name VARCHAR(100),
            role ENUM('Admin', 'Siswa'),
            email VARCHAR(100) UNIQUE,
            password VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ",
    "down" => "
        DROP TABLE IF EXISTS users
    "
];
