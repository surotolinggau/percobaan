<?php
if($_POST){
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("test",$conn); 
	$sql = "insert into mahasiswa (nim,nama,jurusan) values ('{$_POST['nim']}','{$_POST['nama']}','{$_POST['jurusan']}')";
	mysql_query($sql);
	echo 'Data telah disimpan';
} 
?>
<h3>Input Mahasiswa</h3>
<form name="form1" method="post" action="">
<dl>
	<dt>NIM</dt>
	<dd><input type="text" name="nim"/></dd>
	<dt>Nama</dt>
	<dd><input type="text" name="nama"/></dd>
	<dt>Jurusan</dt>
	<dd><input type"text" name="jurusan"/></dd>
	<dt></dt>
	<dd><input type="submit" value="Simpan"/></dd>
</dl>
</form>
