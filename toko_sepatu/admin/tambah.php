<?php
session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: ../auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Produk</title>
<link rel="stylesheet"
href="../assets/style.css">
</head>

<body>

<div class="container">

<h1>Tambah Produk</h1>

<form
action="proses_produk.php"
method="POST"
enctype="multipart/form-data">

<input
type="hidden"
name="aksi"
value="tambah">

<p>Nama Produk</p>
<input
type="text"
name="nama_produk"
required>

<p>Kategori</p>
<input
type="text"
name="kategori"
required>

<p>Harga</p>
<input
type="number"
name="harga"
required>

<p>Stok</p>
<input
type="number"
name="stok"
required>

<p>Deskripsi</p>

<textarea
name="deskripsi"
required>
</textarea>

<p>Gambar</p>

<input
type="file"
name="gambar"
required>

<br><br>

<button type="submit">
Simpan
</button>

</form>

</div>

</body>
</html>