<?php
	//date() : untuk menmapikan tanggal dengan format tertentu
	// echo date("l, d - M - Y");

	//time() : UNIX Timestamp / EPOCH Times
	// echo date("l, d M Y",time()+60*60*24*100);


	//mktime(0,0,0,0,0,0) : membuat waktu sendiri
	//jam,menit,detik,bulan,tanggal,tahun
	// echo date("l",mktime(0,0,0,10,7,1999));
	
	echo date("l",strtotime("8 oct 1999"));

?>