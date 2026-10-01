<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "toko_sepatu"
);

if(!$conn){
    die("Koneksi Database Gagal");
}
?>