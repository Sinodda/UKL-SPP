<?php
include 'connect.php';
session_start();

$username = $_POST['nama'];
$password = ($_POST['password']);

if($username == "" || $password == ""){
    header("location: form-ls.php");
} else {
    $query = "SELECT * FROM siswa WHERE nama = '".$username."' AND password = '".md5($password)."'";
    $result = mysqli_query($connect, $query);

    
    $num = mysqli_num_rows($result);
    
    if($num ==1 ){
        $dt_login = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $username;
        $_SESSION['password'] = $dt_login['password'];
        $_SESSION['nisn'] = $dt_login['nisn'];
        $_SESSION['nis'] = $dt_login['nis'];
        $_SESSION['id_kelas'] = $dt_login['id_kelas'];
        $_SESSION['alamat'] = $dt_login['alamat'];
        $_SESSION['no_telp'] = $dt_login['no_telp'];
        $_SESSION['level'] = $dt_login['level'];
        $_SESSION['status_login']=true;
        header("location: home.php");

    } else {
        header("location: form-ls.php");
    }
}

?>