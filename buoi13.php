<?php

// $array = array('một'=>1,"hai"=>2,"huong"=>9,4,5);
// print_r($array);
// echo $array['một'];
// //exit;

// echo '<hr>';
// $so_pt = count($array)-2;

// // for($i=0; $i<$so_pt; $i++){
// // 	echo $array[$i].'<br>';
// // }


// echo '<hr>';


// foreach($array as $khoa=>$value){
// 	echo $khoa.' - '.$value.'<br>';
// }

$mang = array('Thời sự','Kinh tế', 'Giáo dục','giải trí','công nghệ');

array_splice($mang, 2, 0, array('Bóng đá',"Thể thao"));
//array_push($mang, 'Bóng đá');

// for($i=0; $i<=count($mang);$i++){
// 	$mang[2] = "Bóng đá";
// 	$mang[3] = "Giáo Dục";
// 	$mang[4] = "giải trí";
// 	$mang[5] = "công nghệ";
// }
//print_r($mang);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài tập menu</title>
	<link rel="stylesheet" href="">
</head>
<style>
	ul{
		width: 100%
	}
	li{
		float: left;
		width: 100px;
		list-style-type: none;
		background-color: red;
		color: #fff;
		text-transform: uppercase;
		padding:10px;
		font-weight: bold;
	}

	.container{
		width: 1000px;
		clear: both;
		margin: 10px auto;
		text-align: center;
		
	}
	.sanpham{
		width: 300px;
		float: left;
		height: 300px;
		margin:50px auto;

	}
	.sanpham img{
		width: 160px;
		height: 300px
	}
	.ten, .gia{
		font-size: 20px;
		padding:10px;
		text-transform: uppercase;
		font-weight: bold;
	}
	.ten{
		color:red;
	}
</style>
<body>
<!-- <div style="width: 100%; display: block; clear: both;">
	<ul>
		<?php
			foreach($mang as $giatri){
				echo "<li>$giatri</li>";
			}
			
		?>
	</ul>
</div> -->
<?php

$mangsp = array(
	"1"=>array("TenSP"=>"IPhone 5","Hinh"=>"5.jpg","Gia"=>30000000),
	"2"=>array("TenSP"=>"IPhone 6","Hinh"=>"6.jpg","Gia"=>40000000),
	"3"=>array("TenSP"=>"IPhone 7","Hinh"=>"7.png","Gia"=>50000000),
	"4"=>array("TenSP"=>"IPhone 8","Hinh"=>"8.jpg","Gia"=>60000000),
	"5"=>array("TenSP"=>"IPhone 9","Hinh"=>"9.jpg","Gia"=>70000000),
	"6"=>array("TenSP"=>"IPhone 9","Hinh"=>"9.jpg","Gia"=>80000000)
);

//print_r($mangsp["4"]);

?>


	<div class="container">

	<?php

	foreach($mangsp as $value){

	//$value = array("TenSP"=>"IPhone 5","Hinh"=>"5.jpg","Gia"=>3000)
		//echo ($value['TenSP']);
	?>


	<div class="sanpham">
		<img src="image/hinh/<?php echo $value['Hinh']?>">
		<div class="ten"><?php echo $value['TenSP'];?></div>
		<div class="gia"><?php echo number_format($value['Gia']);?></div>
	</div>


	<?php
	}
	?>

		
		

	</div>
</body>
</html>