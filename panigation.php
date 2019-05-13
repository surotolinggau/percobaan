<?php
	$link = mysqli_connect("localhost","root","","percobaan") or die(mysqli_error($link));
	$perpage = 3;
	$page = isset($_GET["hal"]) ? (int)$_GET["hal"] : 1;
	$start = ($page > 1) ?($page * $perpage) - $perpage : 0;
	$articel = "SELECT * FROM merk LIMIT $start, $perpage";
	$result = mysqli_query($link, $articel);
	$hasil = mysqli_query($link, "SELECT * FROM merk");
	$total = mysqli_num_rows($hasil);
	$pages = ceil($total/$perpage);	
?>
<?php while($row = mysqli_fetch_assoc($result)){?>
	<p><?php echo $row['nama']; ?></p>
<?php } ?>
<div>
	<?php for($i=1; $i<=$pages; $i++){?>
	<a href="?hal=<?php echo $i;?>"><?php echo $i;?></a>
	<?php } ?>
</div>