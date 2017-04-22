<?php

// function noi_chuoi($chuoi){
// 	return $chuoi = $chuoi.", chuỗi đã được thêm";
// }

// $chuoi = "Đây là chuỗi gốc";
// echo noi_chuoi().'<br>';


// //echo $chuoi;

function PTB1($a, $b){
	if($a==0){
		if($b==0){
			$nghiem = "PT vô số nghiệm";
		}
		else{
			$nghiem = "PT vô nghiệm";
		}
	}
	else{
		$nghiem = round((-$b/$a),2);
	}
	return $nghiem;
}

function so_nguyen_to($so){
	//$chuoi = '';
	for($i=2; $i<=sqrt($so); $i++){
		if($so%$i == 0){
			return false;
		}
	}
	return true;
}
//var_dump(so_nguyen_to(3));
if(isset($_POST['timso_ngto'])){
	$so = $_POST['so'];
	$chuoi = '';
	for($i=2;$i<$so;$i++){
		if(so_nguyen_to($i)==true){
			$chuoi.=$i;
		}
		else{
			//$chuoi;
		}
	}
	
}



if(isset($_POST['tinh'])){
	$so_a = $_POST['so_a'];
	$so_b = $_POST['so_b'];
	if(is_numeric($so_a) && is_numeric($so_b)){
		$ketqua = PTB1($so_a,$so_b);
	}
	else{
		$ketqua = "Vui lòng nhập số";
	}
	
}

?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PT bậc 1</title>
	<link rel="stylesheet" href="">
</head>
<body>
<form method="POST">
	<input name="so_a" style="width: 40px" value="<?=@$so_a?>">x + <input name="so_b" style="width: 40px" value="<?=@$so_b?>"> = 0 <input type="submit" name="tinh" value="Tính">
	<br>
	<br>
	Nghiệm của PT là: <input type="text" name="ketqua" readonly value="<?=@$ketqua?>">
</form>
<hr>
<br>
	<br>
	<br>
	<br>
<form method="POST">
	<input type="text" name="so">
	<button type="submit" name="timso_ngto">Tìm</button>
	<br>
	<br>
	Các số nguyên tố nhỏ hơn <?=isset($_POST['so'])?$_POST['so']:'n'?> là:<?=@$chuoi ?>
</form>
</body>
</html>