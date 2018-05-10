<?php
session_start();
include 'config.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($host, "select * from login where username= '$username' and password='$password'");
$x=mysqli_num_rows($query);

if ($x==TRUE){
	$_SESSION['username'] =$username;
	header("location:index.html");
}
else {
	echo "<script>alert ('username atau password salah');location='home.php';</script>";
}

?>
