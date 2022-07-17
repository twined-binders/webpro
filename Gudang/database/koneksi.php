<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "gudang";

    $conn = mysqli_connect($server,$username,$password) or die ("koneksi gagal");
    mysqli_select_db($conn,$database) or die ("Database tidak ditemukan");
?>