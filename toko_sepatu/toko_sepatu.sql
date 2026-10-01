CREATE DATABASE toko_sepatu;
USE toko_sepatu;

CREATE TABLE admin (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
username VARCHAR(50),
password VARCHAR(255)
);

CREATE TABLE produk (
id INT AUTO_INCREMENT PRIMARY KEY,
nama_produk VARCHAR(100),
kategori VARCHAR(50),
harga INT,
stok INT,
deskripsi TEXT,
gambar VARCHAR(255)
);

INSERT INTO admin(nama,username,password)
VALUES(
'Administrator',
'admin',
MD5('admin123')
);

INSERT INTO produk
(nama_produk,kategori,harga,stok,deskripsi,gambar)
VALUES
(
'Nike Air Max',
'Running',
1250000,
10,
'Sepatu running nyaman dan ringan.',
'nike_air_max.jpeg'
),

(
'Adidas Samba',
'Sneakers',
1500000,
8,
'Sepatu klasik dengan desain modern.',
'adidas_samba.jpeg'
),

(
'New Balance 530',
'Casual',
1350000,
12,
'Sepatu casual untuk aktivitas sehari-hari.',
'nb530.jpeg'
),

(
'PUMA Speedcat Ballet',
'Lifestyle',
1299000,
8,
'Sepatu stylish dengan desain ballet modern yang nyaman untuk aktivitas sehari-hari.',
'puma_speedcat_ballet.jpeg'
),

(
'Converse Chuck Taylor',
'Casual',
950000,
15,
'Sepatu casual klasik yang cocok untuk berbagai gaya.',
'converse_chuck_taylor.jpeg'
),

(
'Vans Old Skool',
'Skate',
1100000,
10,
'Sepatu ikonik dengan desain simpel dan nyaman digunakan sehari-hari.',
'vans_old_skool.jpeg'
);