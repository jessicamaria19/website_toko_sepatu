<?php

session_start();

include "../config/database.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query(
    $conn,
    "SELECT * FROM admin
    WHERE username='$username'
    AND password='$password'"
);

$data = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) > 0){

    $_SESSION['admin_id'] = $data['id'];
    $_SESSION['admin_nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];

    header("Location: ../admin/index.php");
    exit;

}else{

    echo "
    <script>
    alert('Username atau Password Salah');
    window.location='login.php';
    </script>
    ";

}
?>