<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For Bersarang</title>
	<style type="text/css">
		.warna-table{
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<h1>Tabel</h1>
	<table border=1  cellpadding="50" cellspacing="0">
		<?php for ($i = 1 ;$i <=5 ; $i++) : ?>
			<?php if($i % 2 == 1 ) : ?>
				<tr class='warna-table'>
			<?php else :?>
				<tr>
			<?php endif; ?>
			<?php for ($j = 1 ; $j <= 5 ; $j++ ): ?>
				<td>
					<?= $i,$j ?>
				</td>
			<?php endfor; ?>
		</tr>
		<?php endfor; ?>
	</table>
</body>
</html>