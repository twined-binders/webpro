<?php
    include "koneksi.php";

    $nim = $_GET['nim'];
    $query="SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $tampil = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($tampil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Ubah Data</title>
</head>
<body>
        <form method="POST">
        <center><input type="text" class="username" name="nim" value="<?php echo $data['nim']; ?>">
            <input type="text" class="username" name="nama" value="<?php echo $data['nama_mahasiswa']; ?>">
            <input type="text" class="username" name="alamat" value="<?php echo $data['alamat_mahasiswa']; ?>"><br>
            <input type="submit" class="submit" name="ubah" value="simpan"></center>
        </form>
</body>
</html>
<?php
    include "koneksi.php";
    error_reporting(0);
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if (isset($_POST['ubah'])) {
        $update = mysqli_query($conn,"UPDATE mahasiswa
                                SET nama_mahasiswa = '$nama',
                                alamat_mahasiswa = '$alamat' WHERE nim = '$_GET[nim]'");
    
    if($update) {
        header("location:tabel.php");
    }
}
?>