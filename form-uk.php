<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Update kelas</title>
         <link rel="stylesheet" href="form-signup.css">
    </head>
    <body>

    <?php
    include "connect.php";
    $qry_get_kelas = mysqli_query($connect, "select * from kelas where id_kelas = '".$_GET['id_kelas']."'");
    $dt_kelas = mysqli_fetch_array($qry_get_kelas);
    ?>
    
      <form action="kelas-update.php" method="post">
      
        <h1>Update kelas</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Ubah Data kelas</legend>
          <label for="id_kelas">Id kelas</label>
          <input type="text" id="id_kelas" name="id_kelas" value="<?= $dt_kelas['id_kelas'] ?>">
          
          <label for="nama_kelas">Nama kelas</label>
          <input type="text" id="nama_kelas" name="nama_kelas" value="<?= $dt_kelas['nama_kelas'] ?>">
          
          <label for="jurusan">jurusan</label>
          <input type="text" id="jurusan" name="jurusan" value="<?= $dt_kelas['jurusan'] ?>">
          
          <label for="angkatan">angkatan</label>
          <select name="angkatan" id="angkatan">
          <option value="30">30</option>
          <option value="29">29</option>
</select>
         
        </fieldset>

        <button type="submit">Update kelas</button>
        
      </form>