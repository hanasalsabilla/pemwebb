<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


mysqli_query($host, "UPDATE data SET  nama='$nama', username='$username', password='$password', WHERE id='$id'");

header("location:index.php");
?>
