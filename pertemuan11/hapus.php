<?php
require 'koneksi.php';

$id = $_GET['id'];

if(hapus($id) > 0){
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

?>