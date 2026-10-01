<?php
session_start();

if(isset($_SESSION['admin_id'])){
    header("Location: ../admin/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>

<body class="login-page">

<div class="login-box">

    <div class="login-logo">
        👟
    </div>

    <h2>Login Admin</h2>

    <p class="login-text">
        Selamat datang di Dashboard Toko Sepatu
    </p>

    <form action="proses_login.php" method="POST">

        <input
        type="text"
        name="username"
        placeholder="Masukkan Username"
        required>

        <input
        type="password"
        name="password"
        placeholder="Masukkan Password"
        required>

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>