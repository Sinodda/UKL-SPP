<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>

<?php include "home.php";?>
<body>
    <h3>Data kelas</h3>
    <a href="form-tk.php" class ="btn btn-success">Tambah kelas</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
        <th>id kelas</th>
        <th>Nama kelas</th>
        <th>jurusan</th>
        <th>angkatan</th>
        <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
$qry_kelas=mysqli_query($connect,"select * from kelas");
            $no=0;
            while($data_kelas=mysqli_fetch_assoc($qry_kelas)){
            $no++;
            ?>
            <tr>          
            <td><?= $data_kelas['id_kelas'] ?></td> 
            <td><?= $data_kelas['nama_kelas'] ?></td> 
            <td><?= $data_kelas['jurusan'] ?></td>
            <td><?= $data_kelas['angkatan'] ?></td> 
            <td><a href="form-uk.php?id_kelas=<?= $data_kelas['id_kelas'] ?>" onclick="return confirm('Apakah anda yakin Mengubah data ini?')" class="btn btn-success">Ubah</a> 
            | <a href="kelas-delete.php?id_kelas=<?= $data_kelas['id_kelas'] ?>" onclick="return confirm('Apakah anda yakin Menghapus data ini?')" class="btn btn-danger">Hapus</a></td>  
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>