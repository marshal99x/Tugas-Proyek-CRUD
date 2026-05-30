CREATE DATABASE crud_db;

USE crud_db;

CREATE TABLE buah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_buah VARCHAR(100),
    warna VARCHAR(50),
    harga INT
);

INSERT INTO buah(nama_buah, warna, harga)
VALUES
('Apel','Merah',15000),
('Jeruk','Orange',12000),
('Pisang','Kuning',10000);
