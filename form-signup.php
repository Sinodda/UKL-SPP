<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="form-signup.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="proses-signup.php" method="post">
        <h1> Sign Up </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Isi data anda </legend>
           
        

          <label for="username">username:</label>
          <input type="text" id="username" name="username">

          <label for="id_petugas">ID:</label>
          <input type="text" id="id_petugas" name="id_petugas">
        
          <label for="nama_petugas">Nama Lengkap</label>
          <input type="text" id="nama_petugas" name="nama_petugas">
       
          <label for="password">Password:</label>
          <input type="password" id="password"       name="password">
        
          <select name="level" id="level">
          <option value="petugas">Petugas</option>
          <option value="admin">Admin</option>
          </select>

          <label for="alamat">alamat</label>
          <input type="text" id="alamat" name="alamat">


        </fieldset>
        
        <button type="submit">Sign Up</button>
        <p class="links"><a href="form-lp.php">Log in petugas</a></p>
        
        
       </form>
        </div>
      </div>
      
    </body>
</html>
