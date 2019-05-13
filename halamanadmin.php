<?php
try {
   // buat koneksi dengan database
   $dbh = new PDO('mysql:host=localhost;dbname=percobaan', "root", "");
 
   // set error mode
   $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 
   // jalankan query
   $result = $dbh->query('SELECT * FROM login');
 
   // tampilkan data
   while($row = $result->fetch()) {
     echo "$row[0] $row[1] $row[2] ";    
     echo "<br />";
   }

   // hapus koneksi
   $dbh = null;
}
catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}
?>