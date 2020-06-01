<?php
require 'koneksi.php';
if(isset($_POST["submit"])){
	if(tambahData($_POST)> 0){
		echo "
			<script>
				alert('Berhasil');
				document.location.href='index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Gagal');
				document.location.href='index.php';
			</script>
		";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah data</title>
</head> 
<body>

	<h1>Input DATA</h1>
	<form action="" method="post">
			<li><label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" required></li>
			<li><label for="tahun">Tahun</label>
				<input type="text" name="tahun" id="tahun"></li>
			<li><label for="sudradara">Sudradara</label>
				<input type="text" name="sudradara" id="sudradara"></li>
			<li><label for="gendre">Gendre</label>
				<input type="text" name="gendre" id="gendre"></li>
			<li><label for="pemain">Pemain</label>
				<input type="text" name="pemain" id="pemain"></li>
			<li><label for="produser">Produser</label>
				<input type="text" name="produser" id="produser"></li>
			<li><label for="untung">Untung</label>
				<input type="text" name="untung" id="untung"></li>
			<li><label for="negara">Negara</label>
				<input type="text" name="negara" id="negara"></li>
			<li><label for="durasi">Durasi</label>
				<input type="text" name="durasi" id="durasi"></li>
			<li><label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar"></li>
			<li><button type="submit" name="submit">Submit</button></li>
	</form>
</body>
</html>