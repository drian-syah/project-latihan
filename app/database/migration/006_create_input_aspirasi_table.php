<?php

return [
    "up" => "
        CREATE TABLE input_aspirasi (
            id INT AUTO_INCREMENT PRIMARY KEY,
            siswa_id INT,
            kategori_id INT,
            aspirasi_id INT UNIQUE,
            lokasi VARCHAR(500),
            keterangan VARCHAR(1000),

            FOREIGN KEY (siswa_id)
                REFERENCES siswa(id)
                ON DELETE CASCADE,
        
            FOREIGN KEY (kategori_id)
                REFERENCES kategori(id)
                ON DELETE SET NULL,

            FOREIGN KEY (aspirasi_id)
                REFERENCES aspirasi(id)
                ON DELETE CASCADE
    )
    ",

    "down" => "
        DROP TABLE IF EXISTS input_aspirasi
    "
]

?>