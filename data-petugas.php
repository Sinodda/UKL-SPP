<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<?php include "home.php";?>
<body>
    <h3>Data Petugas</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
        <th>No.</th>
        <th>Id petugas</th>
        <th>Username</th>
        <th>Nama petugas</th>
        <th>level</th>
        <th>alamat</th>
        <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
$qry_petugas=mysqli_query($connect,"select * from petugas");
            $no=0;
            while($data_petugas=mysqli_fetch_array($qry_petugas)){
            $no++;?>
            <tr>          
            <td><?=$no?></td>
            <td><?=$data_petugas['id_petugas']?></td> 
            <td><?=$data_petugas['username']?></td> 
            <td><?=$data_petugas['nama_petugas']?></td> 
            <td><?=$data_petugas['level']?></td> 
            <td><?=$data_petugas['alamat']?></td>
            <td ><a href="form-up.php?id_petugas=<?= $data_petugas['id_petugas'] ?>" onclick="return confirm('Apakah anda yakin Mengubah data ini?')" class="btn btn-success">Ubah</a> 
            | <a href="petugas-delete.php?id_petugas=<?= $data_petugas['id_petugas'] ?>" onclick="return confirm('Apakah anda yakin Menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
               
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
