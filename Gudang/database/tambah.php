<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Input Data</title>
</head>
<body>
        <form method="POST">
        <center><input type="text" class="username" name="nim" value="ID Barang">
            <input type="text" class="username" name="nama" value="Nama Barang">
            <input type="text" class="username" name="alamat" value="Tanggal Masuk"><br>
            <input type="submit" class="submit" name="tambah" value="simpan"></center>
        </form>
</body>
</html>
<?php
    include "koneksi.php";
    error_reporting(0);
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if (isset($_POST['tambah'])) {
        $input = mysqli_query($conn,"INSERT INTO mahasiswa VALUES
                                ('$nim','$nama','$alamat')");
    
    if($input) {
        header("location:tabel.php");
    }
}
?>