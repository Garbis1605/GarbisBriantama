<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
</body>
	<h2>Input Data Mahasiswa</h2>
	<a href="index.php" style="padding:0.4% 0.8%;background-color:#fff;border-radius:2px;text-decoration:none;">Data Mahasiswa</a><br><br>
	<form actions="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama" required></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim" placeholder="Nim" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" placeholder="email" required></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><input type="text" name="fakultas" placeholder="fakultas" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
	$insert = mysqli_query($conn, "INSERT INTO mahasiswa VALUES
							('".$_POST['nama']."',
							'".$_POST['nim']."',
							'".$_POST['email']."',
							'".$_POST['fakultas']."')");
		if($insert){
			echo 'berhasil disimpan';
		}else{
			echo 'gagal disimpan';
		}
	}
	?>
</body>
</html>			