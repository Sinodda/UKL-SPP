<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah kelas</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="form-signup.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="proses-tk.php" method="post">
        <h1> Tambah kelas </h1>
        
        <fieldset>
          <legend><span class="number">1</span>Ubah Data petugas</legend>
          <label for="id_kelas">Id kelas</label>
          <input type="text" id="id_kelas" name="id_kelas">
          
          <label for="nama_kelas">Nama kelas</label>
          <input type="text" id="nama_kelas" name="nama_kelas">
          
          <label for="jurusan">jurusan</label>
          <input type="text" id="jurusan" name="jurusan">
          
          <label for="angkatan">angkatan</label>
          <select name="angkatan" id="angkatan">
          <option value="30">30</option>
          <option value="29">29</option>
</select>
</fieldset>
        
        <button type="submit">Tambah Data</button>
        
        
        
       </form>
        </div>
      </div>
      
    </body>
</html>
