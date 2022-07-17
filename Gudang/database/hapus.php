<?php
    include "koneksi.php";

    $nim = $_GET['nim'];
    $query = mysqli_query($conn,"DELETE FROM mahasiswa WHERE nim = '$nim'");
    if($query) {
        header("location:tabel.php");
    }
?>