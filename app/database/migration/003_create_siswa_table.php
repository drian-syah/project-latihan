<?php

return [
    "up" => "
        CREATE TABLE siswa (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nis VARCHAR(20) UNIQUE NOT NULL,
            kelas ENUM('10', '11', '12') NOT NULL,
            user_id INT UNIQUE,

            FOREIGN KEY (user_id)
                REFERENCES users(id)
                ON DELETE CASCADE
        )
    ",

    "down" => "
        DROP TABLE IF EXISTS siswa
    "
];

?>