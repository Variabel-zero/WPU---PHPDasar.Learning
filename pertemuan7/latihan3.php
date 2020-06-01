<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post</title>
</head>
<body>
	<?php if( isset($_POST['nama'])) : ?>
	<?= $_POST['nama'];?>
	<?php endif;?>
	
	<form action="" method="POST">
		<h3>Masukkan nama Anda</h3><input type="text" name="nama">
	<br/>
		<button type="submit" name="submit">Submit!</button>
	</form>
</body>
</html>