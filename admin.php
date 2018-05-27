<!DOCTYPE HTML>
<html>
<head>
	<title>Admin</title>
</head>
<body>

	<div class="kotak">
	<h1>ADMIN THE SHORE</h1>
	<form method="post" action="aksi_admin.php">
	<input class="masuk" type="text" autocomplete="off" placeholder="Username or Email Address" name="username" autofocus required><br>
	<input class="masuk" type="password" autocomplete="off" placeholder="Password" name="password" autofocus required><br>
	<div class="button">
		<input type="submit" value="Sign In">
	</div>

	<div class="tengah">
		<pre>
			<p><a>Don't have an account ?               </a><a href="signup.php"><b>Sign Up</b></a></p>
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
	width: 400px;
	margin: 100px auto 0;
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
	background-image: url("back.png");
	text-align: center;
}

input{
	background: #dbd9d9;
	width: 300px;
	text-align: center;
	border: 1px solid #000000;
	margin: 22px auto 0;
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
