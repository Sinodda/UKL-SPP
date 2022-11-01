<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<?php include "home.php";?>
<body>
    <h3>Data Siswa</h3>
    <a href="form-ts.php" class ="btn btn-success">Tambah siswa</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
        <th>No.</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
$qry_siswa=mysqli_query($connect,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
            $no=0;
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
            $no++;
            
            ?>
            
            <tr>          
            <td><?=$no?></td>
            <td><?=$data_siswa['nisn']?></td> 
            <td><?=$data_siswa['nis']?></td> 
            <td><?=$data_siswa['nama']?></td>
            <td><?=$data_siswa['nama_kelas']?></td> 
            <td><?=$data_siswa['alamat']?></td> 
            <td><?=$data_siswa['no_tlp']?></td> 
            <td ><a href="form-us.php?nisn=<?= $data_siswa['nisn'] ?>" onclick="return confirm('Apakah anda yakin Mengubah data ini?')" class="btn btn-success">Ubah</a> 
            | <a href="siswa-delete.php?nisn=<?= $data_siswa['nisn'] ?>" onclick="return confirm('Apakah anda yakin Menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
               
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
