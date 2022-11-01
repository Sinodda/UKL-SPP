<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Siswa</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="form-signup.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="proses-ts.php" method="post">
        <h1> Tambah Siswa </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Isi Data Siswa </legend>
           
        
          <label for="name">Nama:</label>
          <input type="text" id="nama" name="nama">
          
          <label for="nisn">Nisn:</label>
          <input type="number" id="nisn" name="nisn">
          
          <label for="nis">Nis:</label>
          <input type="number" id="nis" name="nis">

          <label for="password">Password:</label>
          <input type="text" id="password" name="password">
          
          <label for="id_kelas">kelas</label>
          <select name="id_kelas" id="id_kelas">
          <option value="1">XI RPL 1</option>
          <option value="2">XI RPL 2</option>
          <option value="3">XI RPL 3</option>
          <option value="4">XI RPL 4</option>
          <option value="5">XI RPL 5</option>
          <option value="6">XI RPL 6</option>
          <option value="7">XI RPL 7</option>
          <option value="8">XI RPL 8</option>
          </select>

          <label for="alamat">Alamat:</label>  
          <textarea id="alamat" name="alamat"></textarea>

          <label for="no_tlp">No HP:</label>
          <input type="number" id="no_tlp" name="no_tlp">

        </fieldset>
        
        <button type="submit">Tambah Data</button>
        
        
        
       </form>
        </div>
      </div>
      
    </body>
</html>
