<?php
if($_POST){
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("test",$conn);
	foreach($_POST['mata_kuliah'] as $id_matakuliah){
		$sql = "insert into mahasiswa_mk (nim,id_mk) values ('{$_POST['nim']}','{$id_matakuliah}')";
		mysql_query($sql) or die("Gagal Menyimpan Data".mysql_error());
	}
}
header("Location: list-mahasiswa.php");
exit('Data disimpan');
