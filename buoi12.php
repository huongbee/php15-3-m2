<?php

$a = 1;
$b = 4;
$c = 8;

//echo ($a>$b?$a:$b)>$c?($a>$b?$a:$b):$c;
// if($a>$b){
//  echo $a;

// }
// else{
// 	echo $b;
// }

// $so = 3;

// switch ($so) {
// 	case 1:
// 		echo $so;
// 		break;
	
// 	default:
// 		echo 'không phải 1';
// 		break;
// }

$nam = 2000;
$can = '';
$chi = '';
switch($nam%10){
	case 0: $can ="canh";break;
	case 1: $can ="tân";break;
	case 2: $can ="nhâm";break;
	case 3: $can ="quí";break;
	case 4: $can ="giáp";break;
	case 5: $can ="ất";break;
	case 6: $can ="bính";break;
	case 7: $can ="đinh";break;
	case 8: $can ="mậu";break;
	case 9: $can ="kỉ";break;
}
switch($nam%12){
	case 0: $chi ="thân";break;
	case 1: $chi ="dậu";break;
	case 2: $chi ="tuất";break;
	case 3: $chi ="hợi";break;
	case 4: $chi ="tí";break;
	case 5: $chi ="sửu";break;
	case 6: $chi ="dần";break;
	case 7: $chi ="mẹo";break;
	case 8: $chi ="thìn";break;
	case 9: $chi ="tị";break;
	case 10: $chi ="ngọ";break;
	case 11: $chi ="mùi";break;
}
echo $can . $chi;
?>
<form method="POST" action="#">
	<input type="text" name="thu" value="">
	<br><br>
	<button type="submit" name="tinh">Kiểm tra</button>
	<?php
	if(isset($_POST['tinh'])){
		$so = $_POST['thu'];

		switch ($so) {
			case 'hai':
			case 'ba':
			case 4:
			case 5:
			case 6:
				echo "Chúc ngày làm việc vui vẻ";
				break;
			default:
				echo 'Cuối tuần vui vẻ';
				break;
		}
	}
	?>
</form>



<?php
$tong = 0;
for($i=1; $i<=10; $i++){
	$tong+=$i; //$tong = $tong+$i;
}
echo $tong;

?>

<style>
.ban_co{
	width: 800px;
	height: 800px;
}
.o_co{
	width: 100px;
	height: 100px;
	float: left;
}
.den{
	background-color: #000
}
.trang{
	background-color: #fff
}



</style>
<div class="ban_co">
	<?php
	for($i=1; $i<=8; $i++){
		for($j=1;$j<=8;$j++){
			if(($i+$j)%2==0){
				echo '<div class="o_co den"></div>';
			}
			else
				echo '<div class="o_co trang"></div>';
		}
	}

	?>


	
</div>