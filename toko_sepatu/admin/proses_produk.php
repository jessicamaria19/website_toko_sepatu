<?php

session_start();

include "../config/database.php";

$aksi=$_POST['aksi'];

if($aksi=="tambah"){

$nama=$_POST['nama_produk'];
$kategori=$_POST['kategori'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$deskripsi=$_POST['deskripsi'];

$gambar=$_FILES['gambar']['name'];

$tmp=$_FILES['gambar']['tmp_name'];

move_uploaded_file(
$tmp,
"../uploads/produk/".$gambar
);

mysqli_query(
$conn,
"INSERT INTO produk
(nama_produk,kategori,harga,stok,deskripsi,gambar)
VALUES
('$nama',
'$kategori',
'$harga',
'$stok',
'$deskripsi',
'$gambar')"
);

header("Location: produk.php");
}

if($aksi=="edit"){

$id=$_POST['id'];

$nama=$_POST['nama_produk'];
$kategori=$_POST['kategori'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$deskripsi=$_POST['deskripsi'];

mysqli_query(
$conn,
"UPDATE produk SET
nama_produk='$nama',
kategori='$kategori',
harga='$harga',
stok='$stok',
deskripsi='$deskripsi'
WHERE id='$id'"
);

header("Location: produk.php");
}