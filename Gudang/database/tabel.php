<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/tabel.css">
    <title>barang</title>
</head>
<body>
<table>
        <tr>
            <td class="row-head"> NO </td>
            <td class="row-head"> ID Barang </td>
            <td class="row-head"> Nama Barang </td>
            <td class="row-head"> Tanggal Masuk </td>
            <td class="row-head"> Aksi </td>
        </tr>
        <tr>
            <?php
                include "koneksi.php";
                $query="SELECT * FROM mahasiswa";
                $tampil=mysqli_query($conn,$query);
                $no = 1;
                while($data=mysqli_fetch_array($tampil)) {
                    ?>
                <tr>
                    <td class="row-data"><?php echo $no++;?></td>
                    <td class="row-data"><?php echo $data['nim'];?></td>
                    <td class="row-data"><?php echo $data['nama_mahasiswa'];?></td>
                    <td class="row-data"><?php echo $data['alamat_mahasiswa'];?></td>
                    <td class="row-data">
                        <a href="ubah.php? nim=<?php echo $data['nim'];?>" class="action"
                            onclick="return confirm('Apakah anda yakin mengupdate data ini ?')"
                        ><img src="../assets/icons/edit.svg" alt="Edit"></a>
                        <a href="hapus.php? nim=<?php echo $data['nim'];?>" class="action"
                            onclick="return confirm('Apakah anda yakin menghapus data ini ?')"
                        ><img src="../assets/icons/trash-2.svg" alt="Hapus"></a>
                    </td>
                </tr>
                <?php    
                }
            ?>
        </tr>
        <tfoot class="table-foot">
        <tr>
            <td colspan="5" class="row-input"> <a href="tambah.php" class="input-link">+</a></td>
        </tr>
        </tfoot>
    </table>
</body>
</html>