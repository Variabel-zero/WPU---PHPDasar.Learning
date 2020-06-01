<?php
	if( !isset($_GET["nama"]) ||
		!isset($_GET["tahun"]) ||
		!isset($_GET["sudradara"]) ||
		!isset($_GET["gendre"]) ||
		!isset($_GET["pemain"]) ||
		!isset($_GET["produser"]) ||
		!isset($_GET["untung"]) ||
		!isset($_GET["negara"]) ||
		!isset($_GET["durasi"]) ||
		!isset($_GET["cover"]))
	{
		//redirect
		header("Location: latihan1.php");
	exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get</title>
</head>
<body>
	<h1>Get dng</h1>
	<ul>
		<li><img src="images/<?= $_GET['cover'];?>" height ="420px " width="280px"></li>
		<li><?= $_GET['nama'];?></li>
		<li><?= $_GET['tahun'];?></li>
		<li><?= $_GET['sudradara'];?></li>
		<li><?= $_GET['gendre'];?></li>
		<li><?= $_GET['pemain'];?></li>
		<li><?= $_GET['produser'];?></li>
		<li><?= $_GET['untung'];?></li>
		<li><?= $_GET['negara'];?></li>
		<li><?= $_GET['durasi'];?></li>	
	</ul>
	<a href="latihan1.php">Kembali</a>
</body>
</html>