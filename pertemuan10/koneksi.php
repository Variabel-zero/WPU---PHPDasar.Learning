<?php
//cara menggambil data dari array ada 4 cara yaitu denga fetch
// mysqli_fetch_row() mengemmbalikan array numerik
// mysqli_fetch_assoc() mengembalikan array assosiatif
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_object()

//koneksi ke database
$coneksi = mysqli_connect("localhost","root","","phpdasar");

function query($query){
	global $coneksi;
	$result = mysqli_query($coneksi,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambahData($data){
	global $coneksi;
	$nama = htmlspecialchars($data['nama']);
	$tahun = htmlspecialchars($data['tahun']);
	$sudradara = htmlspecialchars($data['sudradara']);
	$gendre = htmlspecialchars($data['gendre']);
	$pemain = htmlspecialchars($data['pemain']);
	$produser = htmlspecialchars($data['produser']);
	$untung = htmlspecialchars($data['untung']);
	$negara = htmlspecialchars($data['negara']);
	$durasi = htmlspecialchars($data['durasi']);
	$gambar = htmlspecialchars($data['gambar']);

	$code = "INSERT INTO tbl_film VALUES ('','$nama','$tahun','$sudradara','$gendre','$pemain','$produser','$untung','$negara','$durasi','$gambar')";

	mysqli_query($coneksi,$code);
	return mysqli_affected_rows($coneksi);
}

function hapus($id){
	global $coneksi;
	mysqli_query($coneksi,"DELETE FROM tbl_film WHERE id_film=$id");
	return mysqli_affected_rows($coneksi);
}
?>

  