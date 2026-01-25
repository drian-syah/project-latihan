<?php

return [
    "up" => "
    CREATE TABLE admin (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNIQUE,
        nip VARCHAR(20) UNIQUE NOT NULL,
        
        FOREIGN KEY ( user_id )
            REFERENCES  users(id)
            ON DELETE CASCADE
    )
    ",

    "down" => "
        DROP TABLE IF EXISTS admin
    "
];