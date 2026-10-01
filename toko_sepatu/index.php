<?php

include "config/database.php";
include "includes/header.php";

$query = mysqli_query(
    $conn,
    "SELECT * FROM produk"
);

?>

<section class="hero">

    <h1>Toko Sepatu Modern</h1>

    <p>
        Temukan koleksi sepatu terbaik dari Nike, Adidas,
        dan New Balance dengan kualitas original.
    </p>

    <a href="produk.php" class="btn">
        Belanja Sekarang
    </a>

</section>

<div class="container">

    <h2>Produk Terbaru</h2>

    <div class="produk">

        <?php while($row = mysqli_fetch_assoc($query)){ ?>

        <div class="card">

            <img src="upload/produk/<?= $row['gambar']; ?>">

            <div class="card-body">

                <h3><?= $row['nama_produk']; ?></h3>

                <p class="harga">
                    Rp <?= number_format($row['harga'],0,',','.'); ?>
                </p>

                <a
                class="btn"
                href="detail.php?id=<?= $row['id']; ?>">
                    Detail Produk
                </a>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

<?php
include "includes/footer.php";
?>