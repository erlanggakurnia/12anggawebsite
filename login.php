<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="content.html"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="" method="POST">
						<h3>AYO LOGIN</h3>
						<input type="text" placeholder="USERNAME" name="username">
						<input type="password" placeholder="PASSWORD" name="password">
						<input type="submit" value="MASUK" name="submit">
					</form>
					<?php
					if (isset($_POST['submit'])) {
					   // mengambil nilai yang diinputkan oleh user
					   $username =$_POST['username'];
					   $password =$_POST['password'];
				   
					   // Membuat session
					   $_SESSION['username'] ="erlangga";
					   $_SESSION['password'] = "1903";
				   
					   // Lakukan Perngecekan 
					   if($username == $_SESSION['username'] && $password == $_SESSION['password']){
						   header('location:admin.php');
					   } else {
						   echo "Username atau password salah !";
					   }
					}  
					?>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>AYO LOGIN </h2>
					<h5>SELAMAT DATANG DI SINI</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>
