<?php
$con=mysqli_connect("localhost","root","","percobaan");
if(!$con){
	echo "koneksi gagal";
}

	if(isset($_POST['submit'])){
		$nama_merk = $_POST['nama_depan'];
		$nama_jenis = $_POST['nama_belakang'];
		$cong = "INSERT INTO nama_depan (nama_depan) VALUES ('$nama_merk')";
		$hasil1=mysqli_query($con,$cong);
	
		$uheudde = "SELECT id_nama_depan FROM nama_depan ORDER BY id_nama_depan DESC LIMIT 1";		
		$uhe=mysqli_query($con,$uheudde);		
		$row = mysqli_fetch_assoc($uhe);
        print_r( $row['id_nama_depan']);
        
    }
     
?>



<h3>Tambah Data</h3>
	<form action="" method="post">
		Nama Depan: 	<input type="text" name="nama_depan" /><br/>
		Nama Belakang : 	<input type="text" name="nama_belakang" /><br/>
		<input type="submit" value="Tambah Data" name="submit" id="tambah">
</form>


<!-- *INSERT INTO `percobaan`.`merk` (`id_merk`,`nama`) VALUES ('50','Apaaja');# 1 baris terpengaruh. INSERT INTO `percobaan`.`jenis` (`id_jenis`,`id_merk`,`nama_jenis`) VALUES ('','50','Kemana');# 1 baris terpengaruh. -->