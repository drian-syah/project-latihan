<?php

return [
    "up" => "
        CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(100) UNIQUE NOT NULL,
            name VARCHAR(100) NOT NULL,
            role ENUM('Admin', 'Siswa') NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ",
    "down" => "
        DROP TABLE IF EXISTS users
    "
];
