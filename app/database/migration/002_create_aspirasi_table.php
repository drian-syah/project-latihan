<?php

return [
    "up" => "
        CREATE TABLE aspirasi (
            id INT AUTO_INCREMENT PRIMARY KEY,
            status ENUM('Menunggu', 'Proses', 'Selesai') NOT NULL,
            feedback VARCHAR(1000) NOT NULL,
            admin_id INT,
            
            FOREIGN KEY (admin_id)
                REFERENCES admin(id)
                ON DELETE SET NULL
    )
    ",

    "down" => "
        DROP TABLE IF EXISTS aspirasi
    "
]

?>