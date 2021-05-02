<?php
include '../koneksi.php';
if($koneksi === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = " INSERT INTO `userpass`( `id` ,`nama`, `jabatan`, `username` ,  `password`) VALUES ( NULL , '$nama' , '$jabatan' , '$username' , '$password');";
}
$sql = mysqli_query($koneksi, $data);
if ($sql) {
    header('location:../index_login');
} else {
    header('location:/register?error=212');
}