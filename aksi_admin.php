<?php
session_start();
include 'config.php';

$admin=$_POST['username'];
$admin=$_POST['password'];

$query=mysqli_query($host, "select * from data where username= '$admin' and password='$admin'");
$x=mysqli_num_rows($query);

if ($x==TRUE){
	$_SESSION['username'] =$admin;
	header("location:index.php");
}
else {
	echo "<script>alert ('username atau password salah');location='admin.php';</script>";
}

?>
