<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("test",$conn);
$sql = "select * from album";
$result = mysql_query($sql);
?>
<table cellpadding="5" cellspacing="0" border="1">
	<tr>
		<th>Judul</th>
		<th>Artis</th>
	</tr>
	<?php while($album = mysql_fetch_array($result)){?>
	<tr>
		<td><?php echo $album['judul'];?></td>
		<td><?php echo $album['artis'];?></td>
	</tr>
	<tr>
		<td colspan="2">
		<strong>Lagu: </strong>
		<table cellspacing="0" cellpadding="3">
			<tr>
				<td style="border-bottom:1px solid #000;">No Track</td>
				<td style="border-bottom:1px solid #000">Judul</td>
				<td style="border-bottom:1px solid #000">Durasi</td>
			</tr>
			<?php
			$rowset = mysql_query("select * from lagu where id_album='".$album['id']."'");
			while($lagu = mysql_fetch_array($rowset)){
			?>
			<tr>
				<td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $lagu['no_track'];?></td>
				<td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $lagu['judul'];?></td>
				<td style="border-bottom:1px solid #000"><?php echo $lagu['durasi'];?></td>
			</tr>
			<?php }?>
		</table>
		</td>
	</tr>
	<?php }?>
</table>
