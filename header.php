<?php session_start();
    if($_SESSION['status_login']!=true){
        header('location: form-ls.php');
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SPP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <?php if($_SESSION['level'] == 'admin') {?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="data-siswa.php">Data Siswa</a>
            </li>
            <?php }?>
            <?php if($_SESSION['level'] == 'admin') {?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="data-petugas.php">Data Petugas</a>
            </li>
            <?php }?>
            <?php if($_SESSION['level'] == 'admin') {?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="data-kelas.php">Data Kelas</a>
            </li>
            <?php }?>
            <?php if($_SESSION['level'] == 'admin') {?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">Data SPP</a>
            </li>
            <?php }?>
            <?php if($_SESSION['level'] == 'siswa') {?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">Tagihan</a>
            </li>
            <?php }?>
            <?php if($_SESSION['level'] != 'siswa') {?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">Transaksi</a>
            </li>
            <?php }?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">Histori pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
