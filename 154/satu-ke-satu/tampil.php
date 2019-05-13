<?php
$conn = mysql_connect("localhost","root","blah");
mysql_select_db("test",$conn);
$sql = "select * from product p inner join buku b on p.id_produk=b.id_produk";
$result = mysql_query($sql);
?>
<table cellpadding="5" cellspacing="0" border="1">
	<tr>
		<th>Nama</th>
		<th>Harga</th>
		<th>Penulis</th>
		<th>Penerbit</th>
		<th>ISBN</th>
		<th>Tanggal Terbit</th>
	</tr>
	<?php while($buku = mysql_fetch_array($result)){?>
	<tr>
		<td><?php echo $buku['nama'];?></td>
		<td><?php echo $buku['harga'];?></td>
		<td><?php echo $buku['penulis'];?></td>
		<td><?php echo $buku['penerbit'];?></td>
		<td><?php echo $buku['isbn'];?></td>
		<td><?php echo $buku['tgl_terbit'];?></td>
	</tr>
	<?php }?>
</table>
