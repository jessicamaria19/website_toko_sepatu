<?php
include "../includes/auth.php";
include "../config/database.php";

$jumlahProduk = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM produk")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="admin-container">

    <h1>Dashboard Admin</h1>

    <div class="card-admin">
        <h2><?= $jumlahProduk; ?></h2>
        <p>Total Produk</p>
    </div>

    <br>

    <a href="produk.php" class="btn">
        Kelola Produk
    </a>

    <a href="logout.php" class="btn">
        Logout
    </a>

</div>

</body>
</html>