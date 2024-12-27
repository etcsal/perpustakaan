







<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>


	<?php
	session_start();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");
	?>	
	<body>

	<form role="form" action="" method="post">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login/images/unaspasim.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
						<br><center><p>Create by <a href='https://m.facebook.com/people/Faisal-Salawasna/100088567747228/' title='Muhamad Faisal' target='_blank'>Muhamad Faisal</a></p></center>
						
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
						<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">Pilih Level User</option>
							<option value="ks">Super Admin</option>
							<option value="admin">Administrator</option>
							<option value="petugas">Petugas</option>
						</select>
					</div>
					
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-success btn-block" value="Log in" />
						
					</div>	
			</form>
			</div>
		</div>
	</div>
	
				<?php
	
					$username = $_POST['username'];
					$password = $_POST['password'];
					$login = $_POST['login'];
					$level = $_POST['level'];
					
					if ($login) {
						$sql = $koneksi->query("select * from tb_pengguna where username='$username' and password='$password'");
						$ketemu = $sql->num_rows;
						$data = $sql->fetch_assoc();
						
						if ($ketemu >=1) {
							session_start();
							if ($data['level'] == ks && $level == ks) {
								$_SESSION['ks'] =$data[id];
								
								header("location:index3.php");
							}
							
							else if ($data['level'] == admin && $level == admin) {
								$_SESSION['admin'] =$data[id];
								
								header("location:index.php");
							}
							else if ($data['level'] == petugas && $level == petugas) {
								$_SESSION['petugas'] =$data[id];
								
								header("location:index2.php");
							}
						
						
						}
						else {
							echo '<center><div class="alert alert-danger">Upss...!!! Login gagal. Silakan Coba Kembali</div></center>';
						
						}
					}
					
				?>
			</body>
	

	
	
	
	
	
	
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>
