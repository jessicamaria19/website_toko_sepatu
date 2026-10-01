<?php

include "config/database.php";
include "includes/header.php";

$id=$_GET['id'];

$query=mysqli_query(
$conn,
"SELECT * FROM produk
WHERE id='$id'"
);

$data=mysqli_fetch_assoc($query);

?>

<div class="container">

<img
width="500"
src="upload/produk/<?=
$data['gambar'];
?>">

<h2>
<?= $data['nama_produk']; ?>
</h2>

<p>
Kategori :
<?= $data['kategori']; ?>
</p>

<br>

<p>
<?= $data['deskripsi']; ?>
</p>

<br>

<h3>

Rp
<?= number_format(
$data['harga'],
0,
',',
'.'
); ?>

</h3>

<br>

<p>
Stok :
<?= $data['stok']; ?>
</p>

<br>

<a
href="produk.php"
class="btn">

Kembali

</a>

</div>

<?php
include "includes/footer.php";
?>