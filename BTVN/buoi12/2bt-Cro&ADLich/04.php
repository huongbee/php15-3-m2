<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For - bàn cờ vua</title>
	<style>

		* {
			margin: 0px;
			padding: 0px;
		}
		.ban_co {
			width: 800px;
			height: 800px;
			margin-top: 50px;
			margin: 0 auto;
		}
		.o_co {
			width: 100px;
			height: 100px;
			float: left;
		}
		.do {
			background-color: red;
			/*border: 1px solid #000;*/
		}
		.den {
			background-color: #000;
			/*border: 1px solid red;*/
		}
	</style>
</head>
<body>
	<div class="ban_co">

<?php 

	$i = 1;
	$j  = 1;

	while ($i <= 8){
		while ($j <= 8) {
			echo (($i + $j) % 2 == 0) ? '<div class="o_co den"></div>' : '<div class="o_co do"></div>';
			$j++;
		}
		$i++;
		$j = 1;
	}
?>
	</div>
</body>
</html>