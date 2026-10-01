<?php

session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: ../auth/login.php");
    exit;
}

include "../config/database.php";

$id=$_GET['id'];

$query=mysqli_query(
$conn,
"SELECT * FROM produk
WHERE id='$id'"
);

$data=mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Produk</title>
</head>

<body>

<h1>Edit Produk</h1>

<form
action="proses_produk.php"
method="POST">

<input
type="hidden"
name="aksi"
value="edit">

<input
type="hidden"
name="id"
value="<?= $data['id']; ?>">

<p>Nama Produk</p>

<input
type="text"
name="nama_produk"
value="<?= $data['nama_produk']; ?>">

<p>Kategori</p>

<input
type="text"
name="kategori"
value="<?= $data['kategori']; ?>">

<p>Harga</p>

<input
type="number"
name="harga"
value="<?= $data['harga']; ?>">

<p>Stok</p>

<input
type="number"
name="stok"
value="<?= $data['stok']; ?>">

<p>Deskripsi</p>

<textarea
name="deskripsi"><?= $data['deskripsi']; ?></textarea>

<br><br>

<button type="submit">
Update
</button>

</form>

</body>
</html>