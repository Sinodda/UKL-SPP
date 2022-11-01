<?php
if($_POST){
    $nama=$_POST['nama'];
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $password=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    $alamat= $_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
    if(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='proses-ts.php';</script>";
 
    } elseif(empty($nama)){
        echo "<script>alert('username tidak boleh kosong');location.href='proses-ts.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='proses-ts.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($connect,"insert into siswa (nama, nisn, nis, password, id_kelas, alamat, no_tlp) value ('".$nama."','".$nisn."','".$nis."','".md5($password)."','".$id_kelas."','".$alamat."','".$no_tlp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='data-siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='proses-ts.php';</script>";
        }
    }
}
?>