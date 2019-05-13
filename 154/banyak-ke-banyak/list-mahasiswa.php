<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("test",$conn);
$sql = "select * from mahasiswa";
$result = mysql_query($sql);
?>
<table cellspacing="0" cellpadding="5" border="1">
	<tr>
		<td>NIM</td>
		<td>Nama</td>
		<td>Jurusan</td>
		<td>Aksi</td>
	</tr>
	<?php while($mhs = mysql_fetch_array($result)){?>
	<tr>
		<td><?php echo $mhs['nim'];?></td>
		<td><?php echo $mhs['nama'];?></td>
		<td><?php echo $mhs['jurusan'];?></td>
		<td><a href="mahasiswa_mk.php?nim=<?php echo $mhs['nim'];?>">Tambah Mata Kuliah</a></td>
	</tr>
	<tr>
		<td colspan="4">
			<strong>Mata Kuliah:</strong>
			<table cellspacing="0" cellpadding="5" width="100%">
				<tr>
					<td style="border-bottom:1px solid #000;">Kode MK</td>
					<td style="border-bottom:1px solid #000;">Nama MK</td>
				</tr>
				<?php 
				$rowset = mysql_query("select * from mahasiswa_mk m inner join 
				mata_kuliah m1 on m.id_mk=m1.id where nim='".$mhs['nim']."'");
				while($mk = mysql_fetch_array($rowset)){
				?>
				<tr>
					<td style="border-bottom:1px solid #000;border-right:1px solid #000"><?php echo $mk['kode'];?></td>
					<td style="border-bottom:1px solid #000;"><?php echo $mk['nama'];?></td>
				</tr>
				<?php }?>
			</table>
		</td>
	</tr>
	<?php }?>
</table>
