<?php

require 'koneksi.php';
$film = query("SELECT * FROM tbl_film");
if(isset($_POST['cari'])){
	$film = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<h1><a href="tambahdata.php">Tambah data</a></h1>
	<hr>
	<form action="" method="post">
		<input type="text" name="keyword" size='30' placeholder="ketikan apa yang ingin Anda cari" autocomplete="off" autofocus>
		<button type='submit' name='cari'>Cari</button>
	</form>
	<h1>Daftar FILM</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tahun</th>
			<th>Sudradara</th>
			<th>Gendre</th>
			<th>Pemain</th>
			<th>Produser</th>
			<th>Keuntungan</th>
			<th>Negara</th>
			<th>Durasi</th>
			<th>Cover</th>
			<th>Aksi</th>
		</tr>
		<?php $no=1 ;?>
		<?php foreach($film as $tng) : ?>
		<tr>
			<td><?= $no++;?></td>
			<td><?= $tng['nama']; ?></td>
			<td><?= $tng['tahun']; ?></td>
			<td><?= $tng['sudradara']; ?></td>
			<td><?= $tng['gendre']; ?></td>
			<td><?= $tng['pemain']; ?></td>
			<td><?= $tng['produser']; ?></td>
			<td><?= $tng['untung']; ?></td>
			<td><?= $tng['negara']; ?></td>
			<td><?= $tng['durasi']; ?></td>
			<td><img src="images/<?= $tng['cover']; ?>" height ="340px " width="200px" alt="Gambar belum diupload"></td>
			<td><a href="update.php?id=<?= $tng['id_film'];?>">Edit </a> | <a href="hapus.php?id=<?= $tng['id_film'];?>" onclick="return confirm('yakin?');">Hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>