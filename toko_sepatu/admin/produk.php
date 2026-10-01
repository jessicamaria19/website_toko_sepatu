<?php

session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: ../auth/login.php");
    exit;
}

include "../config/database.php";

$data = mysqli_query(
$conn,
"SELECT * FROM produk ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Data Produk</title>
<link rel="stylesheet"
href="../assets/style.css">
</head>

<body>

<div class="container">

<h1>Data Produk</h1>

<a
href="tambah.php"
class="btn">

+ Tambah Produk

</a>

<br><br>

<table border="1" width="100%" cellpadding="10">

<tr>
<th>No</th>
<th>Gambar</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>

<?php
$no=1;

while($row=mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td>
<img
src="../uploads/produk/<?= $row['gambar']; ?>"
width="80">
</td>

<td><?= $row['nama_produk']; ?></td>

<td>
Rp <?= number_format(
$row['harga'],
0,
',',
'.'
); ?>
</td>

<td><?= $row['stok']; ?></td>

<td>

<a href="edit.php?id=<?=
$row['id'];
?>">

Edit

</a>

|

<a
onclick="return confirm('Hapus produk?')"
href="hapus.php?id=<?=
$row['id'];
?>">

Hapus

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>