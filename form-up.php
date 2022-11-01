<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Update petugas</title>
         <link rel="stylesheet" href="form-signup.css">
    </head>
    <body>

    <?php
    include "connect.php";
    $qry_get_petugas = mysqli_query($connect, "select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas = mysqli_fetch_array($qry_get_petugas);
    ?>
    
      <form action="petugas-update.php" method="post">
      
        <h1>Update petugas</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Ubah Data petugas</legend>
          <label for="id_petugas">Id petugas</label>
          <input type="text" id="id_petugas" name="id_petugas" value="<?= $dt_petugas['id_petugas'] ?>">
          
          <label for="username">Username</label>
          <input type="text" id="username" name="username" value="<?= $dt_petugas['username'] ?>">
          
          <label for="nama_petugas">Nama petugas</label>
          <input type="text" id="nama_petugas" name="nama_petugas" value="<?= $dt_petugas['nama_petugas'] ?>">

          <select name="level" id="level">
          <option value="petugas" value="<?= $dt_petugas['username'] ?>">Petugas</option>
          <option value="admin" value="<?= $dt_petugas['username'] ?>">admin</option>
          </select>
          
          <label for="alamat">alamat</label>
          <input type="text" id="alamat" name="alamat" value="<?= $dt_petugas['alamat'] ?>">

         
        </fieldset>

        <button type="submit">Update petugas</button>
        
      </form>