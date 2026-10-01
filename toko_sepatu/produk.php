<?php

include "config/database.php";
include "includes/header.php";

$cari = $_GET['cari'] ?? '';

$query = mysqli_query(
    $conn,
    "SELECT * FROM produk
    WHERE nama_produk LIKE '%$cari%'"
);

?>

<div class="container">

    <h2>Daftar Produk</h2>

    <form method="GET">

        <input
        type="text"
        name="cari"
        placeholder="Cari Sepatu..."
        value="<?= $cari; ?>">

        <button type="submit">
            Cari
        </button>

    </form>

    <div class="produk">

        <?php while($row = mysqli_fetch_assoc($query)){ ?>

        <div class="card">

            <img
            src="upload/produk/<?= $row['gambar']; ?>"
            alt="<?= $row['nama_produk']; ?>">

            <div class="card-body">

                <h3>
                    <?= $row['nama_produk']; ?>
                </h3>

                <p class="deskripsi">
                    <?= $row['deskripsi']; ?>
                </p>

                <p class="harga">
                    Rp <?= number_format($row['harga'],0,',','.'); ?>
                </p>

                <a
                href="detail.php?id=<?= $row['id']; ?>"
                class="btn">
                    Lihat Detail
                </a>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

<?php
include "includes/footer.php";
?>