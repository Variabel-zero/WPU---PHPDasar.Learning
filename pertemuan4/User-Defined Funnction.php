<?php
	function identitas($nama = "Admin",$alias ="DZ"){
		return "selamat pagi $nama $alias";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Function</title>
</head>
<body>
	<h1><?= identitas("Satriawan","cool"); ?></h1>
</body>
</html>