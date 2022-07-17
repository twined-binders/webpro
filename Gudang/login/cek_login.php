<?php
    session_start();

    include "../database/koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn,"SELECT * FROM akun WHERE username = '$username' AND password='$password' ");
    
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['status'] = "login";
        header("location:../admin/index.html");
    } else {
        header("location:../index.html?pesan-gagal");
    }
?>