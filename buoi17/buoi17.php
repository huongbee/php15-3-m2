<?php

// $mang = array("hai"=>2,3,5,6);

// //echo $mang[0];


// //echo count($mang);
// //print_r($mang);
// $so_pt = count($mang);


// // for($i = 0; $i<$so_pt; $i++){
// // 	echo $mang[$i].'<br>';
// // }
// foreach($mang as $key => $value){
// 	echo $key .' - '. $value.'<br>';
// }



// $chuoi = "Chào các bạn";
// $arr = explode(' ', $chuoi);
// //print_r($arr);

// $chuoi2 = implode(' ', $arr);
// //echo $chuoi2;

// for($i=0; $i<count($arr); $i++){
// 	if($arr[$i] == "các"){
// 		$arr[$i] = "cả";
// 	}
// 	if($arr[$i] == "bạn"){
// 		$arr[$i] = "lớp";
// 	}
// }
// print_r($arr);



?>



<form method="POST" action="test/hienthi.php" enctype="multipart/form-data">
	<input type="file" name="hinh">
	<button type="submit" name="gui">Gửi</button>
</form>