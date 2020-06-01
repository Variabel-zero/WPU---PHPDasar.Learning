<?php
//array dengan perulangan
//for / foreach

$arr1 = ['senin','selasa','rabu'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perulangan pada Array</title>
	<style>
		.kotak{
			height : 50px;
			width : 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin : 3px;
			float : left;
		}
		.clear{ clear : both; }
	</style>
</head>
<body>
	
	<?php for($i = 0 ; $i <= 2 ;$i++){ ?>
		<div class='kotak'><?= $arr1[$i] ?></div>
	<?php } ?>
	
	<div class="clear">
		<?php foreach($arr1 as $a) : ?>
			<div class='kotak'><?= $a ?></div>
		<?php endforeach; ?>
	</div>
</body>
</html>