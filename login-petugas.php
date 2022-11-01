<?php
include 'connect.php'; 
session_start();

$username = $_POST['username'];
$password = ($_POST['password']);

if($username == "" || $password == ""){
    header("location: form-lp.php");
} else {
    $query = "SELECT * FROM petugas WHERE username = '".$username."' AND password = '".md5($password)."'";
    $result = mysqli_query($connect, $query);

    
    $num = mysqli_num_rows($result);
    
    if($num ==1 ){
        $dt_login = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $username;
        $_SESSION['id_petugas'] = $dt_login['id_petugas'];
        $_SESSION['password'] = $dt_login['password'];
        $_SESSION['level'] = $dt_login['level'];
        $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
        $_SESSION['status_login']=true;
        header("location: home.php");

    } else {
        header("location: form-lp.php");
    }
}