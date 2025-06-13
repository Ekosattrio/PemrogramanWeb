-- 1. Buat database
CREATE DATABASE IF NOT EXISTS pemrograman_web_contoh;
USE pemrograman_web_contoh;

-- 2. Tabel Pelanggan
CREATE TABLE IF NOT EXISTS Pelanggan (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(255) NOT NULL,
    Alamat TEXT,
    Email VARCHAR(255)
);

-- 3. Tabel Buku
CREATE TABLE IF NOT EXISTS Buku (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Judul VARCHAR(255) NOT NULL,
    Penulis VARCHAR(2\55) NOT NULL,
    Tahun_Terbit INT NOT NULL,
    Harga DOUBLE NOT NULL,
    Stok INT NOT NULL
);

-- 4. Tabel Pesanan
CREATE TABLE IF NOT EXISTS Pesanan (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Tanggal_Pesanan DATE NOT NULL,
    Pelanggan_ID INT NOT NULL,
    Total_Harga DOUBLE NOT NULL,
    FOREIGN KEY (Pelanggan_ID) REFERENCES Pelanggan(ID)
        ON DELETE CASCADE ON UPDATE CASCADE
);

-- 5. Tabel Detail_Pesanan
CREATE TABLE IF NOT EXISTS Detail_Pesanan (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Pesanan_ID INT NOT NULL,
    Buku_ID INT NOT NULL,
    Kuantitas INT NOT NULL,
    Harga_Per_Satuan DOUBLE NOT NULL,
    FOREIGN KEY (Pesanan_ID) REFERENCES Pesanan(ID)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (Buku_ID) REFERENCES Buku(ID)
        ON DELETE CASCADE ON UPDATE CASCADE
);
