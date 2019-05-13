<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("test",$conn);
//mencari data mahasiswa
$sql = "select * from mahasiswa where nim='".mysql_real_escape_string($_GET['nim'])."'";
$mhs = mysql_fetch_array(mysql_query($sql));
?>
<h2>Tambah Mata Kuliah Mahasiswa: <?php echo $mhs['nama'];?></h2>
<form name="form" method="post" action="simpan_mahasiswa_mk.php">
<?php
//mencari semua data mata kuliah
$subquery = "select id_mk from mahasiswa_mk where nim='".$mhs['nim']."'";
$sql = "select * from mata_kuliah where id not in ({$subquery})";
$result = mysql_query($sql);
while($mataKuliah = mysql_fetch_array($result)){
	//membut checkbox
	echo '<input type="checkbox" name="mata_kuliah[]" value="'.$mataKuliah['id'].'"/>';
	echo $mataKuliah['kode'].': '.$mataKuliah['nama'].' ';
}
?>
<input type="text" name="nim" value="<?php echo $mhs['nim'];?>"/>
<br/>
<input type="submit" value="Simpan"/>
</form>
