<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Update siswa</title>
         <link rel="stylesheet" href="form-signup.css">
    </head>
    <body>

    <?php
    include "connect.php";
    $qry_get_siswa = mysqli_query($connect, "select * from siswa where 
    nisn = '" . $_GET['nisn'] . "'");
    $dt_siswa = mysqli_fetch_array($qry_get_siswa);
    ?>
    
      <form action="siswa-update.php" method="post">
      
        <h1>Update Siswa</h1>
        
        <fieldset>
          <legend><span class="number"></span>Ubah Data Siswa</legend>
          <label for="name">Name:</label>
          <input type="text" id="nama" name="nama" value="<?= $dt_siswa['nama'] ?>">
          
          <label for="nisn">Nisn:</label>
          <input type="number" id="nisn" name="nisn" value="<?= $dt_siswa['nisn'] ?>">
          
          <label for="nis">Nis:</label>
          <input type="number" id="nis" name="nis" value="<?= $dt_siswa['nis'] ?>">

          <label for="password">Password:</label>
          <input type="text" id="password" name="password" value="<?= $dt_siswa['password'] ?>">
          
          <label for="id_kelas">kelas</label>
          <select name="id_kelas" id="id_kelas" value="<?= $dt_siswa['id_kelas'] ?>">
          <option value="1">XI RPL 1</option>
          <option value="2">XI RPL 2</option>
          <option value="3">XI RPL 3</option>
          <option value="4">XI RPL 4</option>
          <option value="5">XI RPL 5</option>
          <option value="6">XI RPL 6</option>
          <option value="7">XI RPL 7</option>
          <option value="8">XI RPL 8</option>
          </select>

          <label for="bio">Alamat:</label>  
          <textarea id="alamat" name="alamat" value="<?= $dt_siswa['alamat'] ?>"></textarea>

          <label for="no_tlp">HP:</label>
          <input type="number" id="no_tlp" name="no_tlp" value="<?= $dt_siswa['no_tlp'] ?>">

        </fieldset>
        
        

        <button type="submit">Update siswa</button>
      </form>