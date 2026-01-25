<?php

return [
    "up" => "
        CREATE TABLE kategori(
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(255) NOT NULL
    )
    ",

    "down" => "
        DROP TABLE IF EXISTS kategori
    "
]

?>