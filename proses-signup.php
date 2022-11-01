<?php
if($_POST){
    $username=$_POST['username'];
    $id=$_POST['id_petugas'];
    $nama_petugas=$_POST['nama_petugas'];
    $pass=$_POST['password'];
    $level=$_POST['level'];
    $alamat=$_POST['alamat'];

    if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='form-signup.php';</script>";
    } 
      elseif(empty($nama_petugas)){
        echo "<script>alert('Nama lengkap tidak boleh kosong');location.href='form-signup.php';</script>";
    } elseif(empty($pass)){
        echo "<script>alert('password tidak boleh kosong');location.href='form-signup.php';</script>";
    } elseif(empty($level)){
            echo "<script>alert('role tidak boleh kosong');location.href='form-signup.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($connect,"insert into petugas (username, id_petugas, nama_petugas, password, level, alamat) value ('".$username."','".$id."','".$nama_petugas."','".md5($pass)."','".$level."','".$alamat."')") or die(mysqli_error($connect));
        if($insert){
            echo "<script>alert('Berhasil Membuat akun');location.href='form-signup.php';</script>";
        } else {
            echo "<script>alert('Gagal membuat akun');location.href='form-signup.php';</script>";
        }
    }
}
?>