<?php
include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];



mysqli_query($host, "INSERT INTO data VALUES ('$id','$username','$password','$nama','$email')");
header("location:login.php");
?>
