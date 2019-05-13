<?php
if($_POST){
	$conn = mysql_connect("localhost","root","blah");
	mysql_select_db("test",$conn); 
	//menyimpan ke table product
	$sql = "insert into product (nama,harga,jenis) values ('{$_POST['nama']}','{$_POST['harga']}','{$_POST['jenis']}')";
	mysql_query($sql) or die('Gagal menyimpan produk');
	//mencari id produk
	$sql = "select max(id_produk) as last_id from product limit 1";
	$hasil = mysql_query($sql);
	$row = mysql_fetch_array($hasil);
	$lastId = $row['last_id'];
	//menyimpan data buku ke table buku
	$sql = "insert into buku (id_produk,penulis,penerbit,isbn,tgl_terbit) 
	values ('$lastId','{$_POST['penulis']}','{$_POST['penerbit']}','{$_POST['isbn']}','{$_POST['tgl_terbit']}')";
	mysql_query($sql) or die('Gagal menyimpan data buku');
	echo 'data tersimpan';
}
