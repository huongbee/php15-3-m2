<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sdfgh</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="menu">
	<div class="phantu">Trang chủ</div>
	<div class="phantu">Sản phẩm
		<div class="menucon">
			<div class="sp1">Sp 1</div>
		</div>
	</div>
	<div class="phantu">Giới thiệu</div>
	<div class="phantu">Liên hệ</div>
</div>
	<div class="container">

		<?php
		$mangsp = array(
		 "1"=>array("TenSP"=>"IPhone 5","Hinh"=>"5.jpg","Gia"=>30000000),
		 "2"=>array("TenSP"=>"IPhone 6","Hinh"=>"6.jpg","Gia"=>40000000),
		 "3"=>array("TenSP"=>"IPhone 7","Hinh"=>"7.png","Gia"=>50000000),
		 "4"=>array("TenSP"=>"IPhone 8","Hinh"=>"8.jpg","Gia"=>60000000),
		 "5"=>array("TenSP"=>"IPhone 9","Hinh"=>"9.jpg","Gia"=>70000000),
		 "6"=>array("TenSP"=>"IPhone 9","Hinh"=>"9.jpg","Gia"=>80000000)
		);
		foreach($mangsp as $sp){

		?>
		<div class="sanpham">
			<img src="images/hinh/<?php echo $sp['Hinh'] ?>" height="250px">
			<div class="ten"><?php echo $sp['TenSP']?></div>
			<div class="gia"><?php echo number_format($sp['Gia'],0,',','.')?></div>
		</div>
		<?php
		}
		?>
	</div>
</body>
</html>
<