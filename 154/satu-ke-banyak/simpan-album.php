<?php
if(!$_POST){
	die('Tidak ada data yang disimpan!');
}
//koneksi ke database
$conn = mysql_connect("localhost","root","");
mysql_select_db("test");
//simpan ke tabel album
$sql = "insert into album (judul,artis) values ('{$_POST['judul']}','{$_POST['artis']}')";
mysql_query($sql) or die('Gagal menyimpan album');
//mencari id album
$sql = "select max(id) as id_album from album limit 1";
$row = mysql_fetch_array(mysql_query($sql));
$id_album = $row['id_album'];
//menyimpan data ke tabel lagu
foreach($_POST['no_track'] as $key => $judul){
	$sql = "insert into lagu(id_album, no_track,judul,durasi) 
	values ('{$id_album}','{$_POST['no_track'][$key]}','{$judul}','{$_POST['durasi'][$key]}')";
	mysql_query($sql);
}
echo 'Data telah disimpan';
