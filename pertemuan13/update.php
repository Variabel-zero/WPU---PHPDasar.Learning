<?php

require 'koneksi.php';

$id = $_GET['id'];
$mhs = tampilUpdateData("SELECT * FROM tbl_film WHERE id_film=$id")[0];

if(isset($_POST["submit"])){
	if(updateData($_POST)> 0){
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
	<title>Ubah data</title>
</head> 
<body>

	<h1>Ubah DATA</h1>
	<form action="" method="post" enctype="multipart/form-data">
							
				<input type="hidden" name="id"  value="<?= $mhs['id_film'];?>">
				<input type="hidden" name="gambarlama"  value="<?= $mhs['cover'];?>">
			
			<li><label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" value="<?= $mhs['nama'];?>" required></li>
			<li><label for="tahun">Tahun</label>
				<input type="text" name="tahun" id="tahun" value="<?= $mhs['tahun'];?>"></li>
			<li><label for="sudradara">Sudradara</label>
				<input type="text" name="sudradara" id="sudradara" value="<?= $mhs['sudradara'];?>"></li>
			<li><label for="gendre">Gendre</label>
				<input type="text" name="gendre" id="gendre" value="<?= $mhs['gendre'];?>"></li>
			<li><label for="pemain">Pemain</label>
				<input type="text" name="pemain" id="pemain" value="<?= $mhs['pemain'];?>"></li>
			<li><label for="produser">Produser</label>
				<input type="text" name="produser" id="produser" value="<?= $mhs['produser'];?>"></li>
			<li><label for="untung">Untung</label>
				<input type="text" name="untung" id="untung" value="<?= $mhs['untung'];?>"></li>
			<li><label for="negara">Negara</label>
				<input type="text" name="negara" id="negara" value="<?= $mhs['negara'];?>"></li>
			<li><label for="durasi">Durasi</label>
				<input type="text" name="durasi" id="durasi" value="<?= $mhs['durasi'];?>"></li>
			<li><label for="gambar">Gambar</label>
				<img src="images/<?= $mhs['cover'];?>" height='100px' width='100px'>
				<input type="file" name="gambar" id="gambar" ></li>
			<li><button type="submit" name="submit">Submit</button></li>
	</form>
</body>
</html>