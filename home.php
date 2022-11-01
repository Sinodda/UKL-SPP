<?php 
    include "header.php";
    ?>
   
    <?php if($_SESSION['level'] == 'siswa') {?>
    <h2>Selamat datang <?=$_SESSION['nama']?> di website SPP.</h2>
    <?php } elseif($_SESSION['level'] == 'petugas') {?>
    <h2>Selamat datang <?=$_SESSION['username']?> di website SPP</h2>    
    <?php } elseif($_SESSION['level'] == 'admin') {?>
     <h2>Selamat datang <?=$_SESSION['username']?> di website SPP</h2>   
    <?php } ?>    

    <?php
?>
