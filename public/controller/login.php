<?php
include '../koneksi.php';

session_start();

	
$username = $_POST['username'];
$password = $_POST['password'];

$get_user = "SELECT * FROM userpass WHERE username = '$username'";
$result = mysqli_query($koneksi,$get_user);

$data = mysqli_fetch_array($result);
if($data){
    
    if($password == $data['password']){
        header('location:../gas');
    }else{
        header('location:/?error=1'); //redirect jika password salah
    }
}else{
    Header("Location: login.php");
    echo "<div class='alert alert-danger'>
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>";
} 
?>