<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysqli = mysqli_query($host,"SELECT * FROM data WHERE id='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
		?>
		<form action="proses_edit.php" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
				</tr>

        <tr>
          <td>Password</td>
          <td><input type="password" name="password" value="<?php echo $data['password'] ?>"></td>
        </tr>

        <tr>
          <td>Password</td>
          <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
        </tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>
		<?php } ?>
	</body>
	</html>
