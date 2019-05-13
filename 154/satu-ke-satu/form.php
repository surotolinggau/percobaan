<form name="form1" action="simpan.php" method="post">
	<dl>
		<dt>Nama</dt>
		<dd><input type="text" name="nama"/></dd>
		<dt>Harga</dt>
		<dd><input type="text" name="harga"/></dd>
		<dt>Jenis</dt>
		<dd>
			<select name="jenis">
				<option value="BUKU">Buku</option>
			</select>
		</dd>
		<dt>Penulis</dt>
		<dd><input type="text" name="penulis"/></dd>
		<dt>Penerbit</dt>
		<dd><input type="text" name="penerbit"/></dd>
		<dt>ISBN</dt>
		<dd><input type="text" name="isbn"/></dd>
		<dt>Tanggal Terbit</dt>
		<dd><input type="text" name="tgl_terbit"/></dd>
		<dt></dt>
		<dd><input type="submit" value="Simpan"/></dd>
	</dl>
</form>
