<?php

if($_POST){

    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    $alamat = $_POST['alamat'];
    
    if (empty($id_petugas)) {
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='form-up.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='form-up.php';</script>";
    } else{
        include "connect.php";
        if(empty($password)){
            $update=mysqli_query($connect,"update petugas set nama_petugas='".$nama_petugas."', username='".$username."', level='".$level."', alamat='".$alamat."'  where id_petugas='".$id_petugas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='data-petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='petugas-update.php?id_petugas=".$id_siswa."';</script>";
            }
        } else {
            $update = mysqli_query($connect, "update petugas set nama_petugas='" .$nama_petugas."',username='".$username."', level='".$level."', alamat='".$alamat."' where id_petugas='".$id_petugas."'") or die(mysqli_error($connect));
            if ($update) {
                echo "<script>alert('Sukses update petugas');location.href='data-petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='petugas-update.php?id_petugas=" .$id_petugas. "';</script>";
            }
        }
    }
















}

?>