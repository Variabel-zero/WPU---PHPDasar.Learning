<?php

$coneksi = mysqli_connect("localhost","root","","phpdasar");


#menampilkan isi database dari tbl_film
function query($query){
	global $coneksi;
	$result = mysqli_query($coneksi,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}
?>