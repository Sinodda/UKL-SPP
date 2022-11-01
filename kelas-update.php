<?php

if($_POST){

    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    
    if (empty($id_kelas)) {
        echo "<script>alert('id kelas tidak boleh kosong');location.href='form-uk.php';</script>";
    } elseif (empty($nama_kelas)) {
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='form-uk.php';</script>";
    } else{
        include "connect.php";
        if(empty($angkatan)){
            $update=mysqli_query($connect,"update kelas set nama_kelas='".$nama_kelas."', jurusan='".$jurusan."', angkatan='".$angkatan."'  where id_kelas='".$id_kelas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='data-kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='kelas-update.php?id_kelas=".$id_kelas."';</script>";
            }
        } else {
            $update = mysqli_query($connect, "update kelas set nama_kelas='" .$nama_kelas."',jurusan='".$jurusan."', angkatan='".$angkatan."' where id_kelas='".$id_kelas."'") or die(mysqli_error($connect));
            if ($update) {
                echo "<script>alert('Sukses update kelas');location.href='data-kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='kelas-update.php?id_petugas=" .$id_kelas. "';</script>";
            }
        }
    }
















}

?>