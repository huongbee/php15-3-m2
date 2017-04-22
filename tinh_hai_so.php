<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tính toán trên hai số</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
$ketqua = '';
$so_a = '';
$so_b = '';
$pheptinh = '';
if(isset($_GET['tinh'])){
	$so_a = $_GET['so_a'];
	$so_b = $_GET['so_b'];
	$pheptinh = $_GET['pheptinh'];
	if(is_numeric($so_a) && is_numeric($so_b)){
		if($pheptinh == '+'){
			$ketqua = $so_a + $so_b;


			// $kieu_du_lieu = is_string($ketqua);
			// var_dump($kieu_du_lieu);




		}
		if($pheptinh == '-'){
			$ketqua = $so_a - $so_b;
		}
		if($pheptinh == '*'){
			$ketqua = $so_a * $so_b;
		}
		if($pheptinh == '/'){
			$ketqua = round(($so_a/$so_b),2);
		}
	}
	else{
		$ketqua = "Vui lòng nhập số";
	}
	

}


?>
<div  style="text-align: center;">
	<form method="GET">
		<input type="text" name="so_a" value="<?php echo $so_a?>" placeholder="Nhập số thứ nhất">
		<br><br>
		<input type="text" name="so_b" value="<?php echo @$so_b?>" placeholder="Nhập số thứ 2">
		<br><br>
		<input type="text" name="pheptinh" value="<?php echo @$pheptinh?>" placeholder="Nhập phép tính">
		<br><br>
		<p>
			<?php
			// if(isset($_GET['tinh'])){
			// 	echo $so_a.' '.$pheptinh. ' '. $so_b. '=' . $ketqua;
			// }
			if(!empty($_GET['tinh']) && is_numeric($so_a) && is_numeric($so_b)){
				echo $so_a.' '.$pheptinh. ' '. $so_b. '=' . $ketqua;
			}
			else{
				echo $ketqua;
			}
			
			?>
			
		</p>
		<br><br>
		<input type="submit" name="tinh" value="Tính">
	</form>
</div>
</body>
</html>