<?php
//cara menggambil data dari arrat ada 4 cara yaitu denga fetch
// mysqli_fetch_row() mengemmbalikan array numerik
// mysqli_fetch_assoc() mengembalikan array assosiatif
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_object()
require 'koneksi.php';
$film = query("SELECT * FROM tbl_film");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
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
		<?php foreach($film as $tng) : ?>
		<tr>
			<td>1</td>
			<td><?= $tng['nama']; ?></td>
			<td><?= $tng['tahun']; ?></td>
			<td><?= $tng['sudradara']; ?></td>
			<td><?= $tng['gendre']; ?></td>
			<td><?= $tng['pemain']; ?></td>
			<td><?= $tng['produser']; ?></td>
			<td><?= $tng['untung']; ?></td>
			<td><?= $tng['negara']; ?></td>
			<td><?= $tng['durasi']; ?></td>
			<td><img src="images/<?= $tng['cover']; ?>" height ="340px " width="200px"></td>
			<td><a href="#">Edit </a> | <a href="#">Hapus</td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>