<?php

include "../config/database.php";

$nama = "Administrator";
$username = "admin";
$password = md5("admin123");

$cek = mysqli_query(
$conn,
"SELECT * FROM admin
WHERE username='$username'"
);

if(mysqli_num_rows($cek) > 0){

    echo "Admin sudah ada";

}else{

    mysqli_query(
    $conn,
    "INSERT INTO admin
    (nama,username,password)
    VALUES
    (
    '$nama',
    '$username',
    '$password'
    )"
    );

    echo "Admin berhasil dibuat";
}
?>