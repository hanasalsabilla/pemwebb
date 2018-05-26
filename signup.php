<!DOCTYPE HTML>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<div class="kotak">
	<h1>SIGN UP THE SHORE</h1>
	<form action="aksi_daftar.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data['id']?>">
	<input class="masuk" type="text" autocomplete="off" placeholder="Username" name="username" autofocus required><br>
	<input class="masuk" type="password" autocomplete="off" placeholder="Password" name="password" autofocus required><br>
	<input class="masuk" type="text" autocomplete="off" placeholder="Nama" name="nama" autofocus required><br>
	<input class="masuk" type="text" autocomplete="off" placeholder="Email" name="email" autofocus required><br>
	<div class="button">
		<input type="submit" value="Sign Up">
	</div>

	<div class="tengah">
		<pre>
			<p><a>Have an account ?                             </a><a href="login.php"><b>Sign In</b></a></p>
		</pre>
	</div>
	</form>
</div>
</body>
</html>

<style>

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}

div.kotak{
	background: #ffffff;
	width: 500px;
	margin: 50px auto 0;
	border-radius: 5px;
	min-height: 220px;
	overflow: hidden;
}

h1{
	font-family: monospace;
	color: #000000;
	width: 300px;
	text-align: center;
	margin: 22px auto 0;
	border-radius: 5px;
	min-height: 40px;
	overflow: hidden;
}

body{
	background-image: url("background.jpg");
	text-align: center;
}

input{
	background: #dbd9d9;
	width: 300px;
	text-align: center;
	border: 1px solid #000000;
	margin: 15px auto 0;
	border-radius: 5px;
	min-height: 40px;
	overflow: hidden;
}

div.button input[type="submit"]{
	background-color: #000000;
	width: 300px;
	font-size: 20px;
	color: #ffffff;
	text-align: center;
	border: 0px solid #ffffff;
	margin: 15px auto 0;
	border-radius: 5px;
	min-height: 40px;
	overflow: hidden;
}

.tengah p {
  color: #000000;
  margin: 20px;
  text-align: center;
  font-size: 15px;
}
