<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<style type="text/css">
		#kotak{
			margin: 0 auto;
			padding: 10px;
			width: 300px;
			background-color: blue;
			border-radius: 5px;
			margin-top: 20%;
		}
		.kotakkiri{
			width: 30%;
			padding-top: 5px;
			color: white;
		}
		.kotakkanan{
			width: 50%;
		}
		.kotakkiri, .kotakkanan{
			float: left
		}
		#login{
			width: 50px;
			margin: 0 auto;
		}
		#masuk{
			margin-top: 10px;
			background-color: white;
			color: black;
			border: 0;
			font-size: 17px;
		}
		#masuk:hover{
			background-color: grey;
			color: white;
		}
		.clear{
			clear: both;
		}
	</style>
	<?php
	try{
		//membuat koneksi menggunakan PHP berbasis PDO
		$con = new PDO('mysql:host=localhost;dbname=percobaan',"root","");
		//set error mode
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		function cekdata($name,$pass){
			$query= "select * from login WHERE nama='$name' AND password='$pass'"; 
			global $con;
			$result=$con->query($query);
			if($result->fetch(PDO::FETCH_ASSOC)){
				return true;
			}else{
				return false;
			}
		}
		$error="";
		if(isset($_POST['submit'])){
			$name=$_POST['username'];
			$pass=$_POST['password'];
			if(!empty(trim($name)) && !empty(trim($pass))){
			if(cekdata($name,$pass)){
				header('location : halamanadmin.php');
			}else{
				$error = "ada masalah pada saat login";
			}
		}else{
			$error = "nama dan password wajib diisi";
		}
	}
			
	?>
</head>
<body style="background-color:aqua;">
	<div id="kotak">
	<div style="text-align: center; color:red;"><?php echo "$error"; ?></div>
	<form action="" method="post">
		<div class="kotakkiri">
			<table >
				<tr><td>Nama</td></tr>
				<tr><td>Password</td></tr>
			</table>
		</div>
		<div class="kotakkanan">
			<table>
				<tr><td><input type="text" name="username"/></td></tr>
				<tr><td><input type="Password" name="password" /></tr></td></tr>
			</table>
		</div>
		
		<div class="clear"></div>
		<div id="login"><input type="submit" value="Login" id="masuk" name="submit"></div>
		</form>
	</div>
	<?php
			//hapus koneksi
			$con = null;
		}catch (PDOException $e){
			//tampilkan pesan kesalahan apabila ada kesalahan
			print "koneksi terjadi kesalahan: ".$e->getMessage()."<br/>";
			die();
		}
	?>
</body>
</html>