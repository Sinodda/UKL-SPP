<?php
if ($_POST) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $pass = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    if (empty($nisn)) {
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='form-us.php';</script>";
    } elseif (empty($nama)) {
        echo "<script>alert('username tidak boleh kosong');location.href='form-us.php';</script>";
    } else {
        include "connect.php";
        if (empty($password)) {
            $update = mysqli_query($connect, "update siswa set nama='" . $nama . "',password='" . $pass . "', id_kelas='" . $id_kelas . "', alamat='" . $alamat . "', no_tlp='" . $no_tlp ."' where nisn = '" . $nisn . "' ") or die(mysqli_error($connect));
            if ($update) {
                echo "<script>alert('Sukses update siswa');location.href='data-siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='siswa-update.php?id_siswa=" . $nama . "';</script>";
            }
        } else {
            $update = mysqli_query($connect, "update siswa set nama='" . $nama . "',password='" . $pass . "', id_kelas='" . $id_kelas . "', alamat='" . $alamat . "', no_tlp='" . $no_tlp ."' where id_siswa = '" . $nama . "' ") or die(mysqli_error($connect));
            if ($update) {
                echo "<script>alert('Sukses update siswa');location.href='data-siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='siswa-update.php?id_siswa=" . $nama . "';</script>";
            }
        }
    }
}