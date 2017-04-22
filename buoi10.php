<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buổi 10 - php</title>
	<link rel="stylesheet" href="">
</head>
<body>
<p>
	<?php 
		//echo 'Xin chào các bạn';

		/*$so_a = 2;
		$so_b = 4;
		$c = $so_a + $so_b;
		//echo 'Tổng của $so_a và $so_b là: $c';

		echo '<br>';

		echo "Tổng của $so_a và $so_b là: $c";*/
	?>
</p>
	<br>




	<form method="GET">
		Số a: <input type="text" name="so_a" placeholder="Nhập số thứ nhất">
		<br><br>
		Số b: <input type="text" name="so_b" placeholder="Nhập số thứ 2">
		<button type="submit">Tính</button>
	</form>

	<?php
		//error_reporting(E_ALL);
		//ini_set('display_errors', 1);

		if(isset($_GET['so_a']) && isset($_GET['so_b'])){
			/*$a = $_GET['so_a'];
			$b = $_GET['so_b'];*/

			echo "Tổng của $_GET[so_a] và $_GET[so_b]  là:  ".($_GET['so_b'] + $_GET['so_a']);
		}
		else{
			echo "Vui lòng nhập 2 số";
		}
		
		
	?>

	<!-- dd -->
</body>
</html>