<?php
if($_POST){
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("test",$conn); 
	$sql = "insert into mata_kuliah (kode,nama) values ('{$_POST['kode']}','{$_POST['nama']}')";
	mysql_query($sql);
	echo 'Data telah disimpan';
} 
?>
<h3>Input Mata Kuliah</h3>
<form name="form1" method="post" action="">
<dl>
	<dt>Kode MK</dt>
	<dd><input type="text" name="kode"/></dd>
	<dt>Nama</dt>
	<dd><input type="text" name="nama"/></dd>
	<dt></dt>
	<dd><input type="submit" value="Simpan"/></dd>
</dl>
</form>
 
