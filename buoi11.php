<?php

/*$a = 'Xin chào các bạn';
var_dump($a);

*/


$mang = array('PHP', 'iOS', 'Android', 1);
echo '<pre>';
print_r($mang);
echo '</pre>';


echo '<pre>';
var_dump($mang);
echo '</pre>';

class php{
	function chao_ban($ten='a'){
		echo "xin chào bạn ".$ten;
	}
};

$object = new php();

$object->chao_ban('Khoa Pham Tranining');


$doituong = new php();


// function chaoban(){
// 		echo "xin chào các bạn ";
// 	}

// $a = chaoban();

///Chuyển đổi kiểu dữ liệu
echo '<br>';




$don_gia = 50000;
echo getType($don_gia);


echo '<br>';
/*
$don_gia = (string)$don_gia;
echo getType($don_gia);
*/
echo $chao_ban = '1212';
echo '<br>';


define('pi',3.14343);

echo pi;
$r = 10;
echo "Chu vi hình tròn là: ".$cv = 2*pi*$r;
echo '<br>';
echo "Diện tích hình tròn là: ".$s = pi*pow($r,2);
echo '<br>';

$a = 10;
$b = 10;

//echo $a+=$b; //$a = $a+$b;
echo '<br>';
//echo $a.=$b; 


if($a===$b || $a>$b){
	echo $a .'='.$b;
}
else{
	echo "Hai số bằng nhau";
}
echo '<br>';


$canh_a = 4;
$canh_b = 3;
$canh_c = 3;


if(($canh_a + $canh_b > $canh_c) && ($canh_a + $canh_c > $canh_b) && ($canh_c + $canh_b > $canh_a) ){
	echo "Đây là tam giác"."<br>";
	if($canh_a*$canh_a + $canh_b*$canh_b == $canh_c*$canh_c  || 
		$canh_c*$canh_c + $canh_b*$canh_b == $canh_a*$canh_a || 
		$canh_a*$canh_a + $canh_c*$canh_c == $canh_b*$canh_b){
		echo "Đây là tam giác vuông";
	}
	elseif($canh_a == $canh_b && $canh_a == $canh_c){
		echo "Đây là tam giác đều";
	}
	elseif($canh_a == $canh_b || $canh_a == $canh_c || $canh_b == $canh_c){
		echo "Đây là tam giác cân";
	}
	
	else{
		echo "Đây là tam giác thường";
	}

}
else{
	echo "Đây ko phải là tam giác";
}
echo '<br>';


$i = 10;
$j = 20;

if(!($i>$j)){
	echo "i không lớn hơn j";
}
else{
	echo 'i lớn hơn j';
}



















?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>