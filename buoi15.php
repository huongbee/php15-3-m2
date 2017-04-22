<?php

// $check = checkdate(2,30,2017);
// var_dump($check);
date_default_timezone_set('Asia/Ho_chi_minh');
// $date = date('d-m-Y h:i:s');
// echo $date;
// $date = getdate();


// echo $date['weekday'];
echo strtotime('now')










// $chuoi = "lập-trình-php";
// $mang = explode('-',$chuoi);
// print_r($mang);


// $mang = array("lập",'trình','php');
// $chuoi = implode('-',$mang);
// echo $chuoi;

// $chuoi = "abcdefghik";
// echo substr($chuoi, 2,-3);


// $so = rand(50,100);

// echo $so;
// if(isset($_GET['xem'])){
// 	if($_GET['chuoigoc'] != '' && $_GET['chuoituonglai'] !='' && $_GET['chuoihientai'] !=''){
// 		$chuoigoc = $_GET['chuoigoc'];
// 		$c_tuong_lai = $_GET['chuoituonglai'];
// 		$c_hien_tai = $_GET['chuoihientai'];

// 		$chuoimoi = str_replace($c_hien_tai, $c_tuong_lai, $chuoigoc );
// 		echo $chuoimoi;
// 	}
	
// }


// if(strcasecmp($chuoi1, $chuoi2) == 0){
// 	echo "hai chuỗi bằng nhau";
// }
// elseif(strcasecmp($chuoi1, $chuoi2) < 0){
// 	echo "chuỗi 1 bé hơn chuỗi 2";
// }
// else{
// 	echo "chuỗi 1 lớn hơn chuỗi 2";
// }


?>
<!-- <form method="GET">
	Chuỗi gốc:<input type="text" name="chuoigoc" placeholder="Nhập chuỗi gốc" value="<?php echo @$_GET['chuoigoc']?>" id="chuoigoc">
	<br><br>
	Chuỗi cần thay:<input type="text" name="chuoihientai" placeholder="Nhập chuỗi cần thay" value="<?php echo @$_GET['chuoihientai']?>" id="chuoihientai">
	<br><br>
	Chuỗi thay thế<input type="text" name="chuoituonglai" placeholder="Nhập chuỗi thay thế" value="<?=@$_GET['chuoituonglai']?>" id="chuoituonglai">
	<br><br>
	<button type="submit" name="xem" onclick="kiemtra()">Xem kết quả</button>
</form>

<script>


 function kiemtra(){
 	var chuoigoc = document.getElementById('chuoigoc');
 	var chuoihientai = document.getElementById('chuoihientai');
 	var chuoituonglai = document.getElementById('chuoituonglai');
 	if(chuoigoc.value == ''){
 		alert('vui lòng nhập chuỗi gốc');
 		chuoigoc.focus();
 		return false;
 	}
 	if(chuoihientai.value == ''){
 		alert('vui lòng nhập chuỗi cần thay');
 		chuoihientai.focus();
 		return false;
 	}
 	if(chuoituonglai.value == ''){
 		alert('vui lòng nhập chuỗi thay thế');
 		chuoituonglai.focus();
 		return false;
 	}
 }



</script> -->