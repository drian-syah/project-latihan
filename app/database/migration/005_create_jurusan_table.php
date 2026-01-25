<?php

return [
    "up" => "
        CREATE TABLE jurusan (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(255) NOT NULL
        )
    ",

    "down" =>"
        DROP TABLE IF EXISTS jurusan
    "
]

?>