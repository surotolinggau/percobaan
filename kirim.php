<?php
	$sms1 = "Pengumuman SIA SDN 20 LLG : \n";
		// $sms1 = $_POST['judul_pengumuman'];
		
		
		$sms2 = "\nSelengkapnya www.SIASDN20LLG.com";
		$jum_char1 = strlen($sms1);
		$jum_char2 = strlen($sms2);
		$sms = $sms1+$sms2;
		echo 160-($jum_char2+$jum_char1);
	
	
?>