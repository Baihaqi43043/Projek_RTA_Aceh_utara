<?php
require "koneksi.php";
$nik = $_POST['nik'];
$username = $_POST['username'];
$password = $_POST['password'];
$level    = $_POST['level'];
$nokta = $_POST['nokta'];
$nama = $_POST['nama'];
$tgl    = $_POST['tgl'];
$alamat   = $_POST['alamat'];
$status = $_POST['status'];
$bidang = $_POST['bidang'];
$departemen    = $_POST['departemen'];

$input2  = mysqli_query($conn, "INSERT INTO login(username,password,level)VALUES('$username',md5('$password'),'$level')");

$query_ = mysqli_query($conn,"SELECT `id`FROM `login` WHERE `username` = '$username'");
$id = mysqli_fetch_array($query_);

$input  = mysqli_query($conn, "INSERT INTO member(nokta,nama,nik,tgllahir,alamat,bidang,status,departemen,id_user,foto)VALUES('$nokta','$nama','$nik','$tgl','$alamat','$status','$bidang','$departemen','$id[id]','user3.png')");

if ($input && $input2) {
    echo "<script>window.location = '../member'</script>";
} else {
    echo "<script>alert('Maaf data gagal disimpan, silahkan ulangi kembali');
    window.location = '../member'</script>";
}