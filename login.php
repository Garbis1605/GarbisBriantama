<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h3>Selamat Datang di SSO UNTAG</h3>
	<h3>Masukkan username dan password</h3>
	<form action="" method="POST">
		<input type="text" name="user" placeholder="Enter your username" />
		<input type="password" name="pass" placeholder="Enter your password" />
		<input type="submit" name="login" value="Login" />
	</form>
	<?php
	if(isset($_POST['login'])){
		$conn = mysqli_connect('localhost','root','','login');
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$cek_data = mysqli_query($conn, "SELECT * FROM tb_user WHERE nama = '$user' AND password = '$pass'");
		$hasil = mysqli_fetch_array($cek_data);
		$level = $hasil['level'];
		$row = mysqli_num_rows($cek_data);
		if($row > 1){
			if($level == 'Admin'){
				header('location:admin.php');
			}elseif($level == 'Mahasiswa'){
				header('location:index.php');
			}elseif($level == 'Dosen'){
				header('location:dosen.php');
			}
		}else{
			echo 'login gagal';
		}
	}
	?>
</body>
</html>