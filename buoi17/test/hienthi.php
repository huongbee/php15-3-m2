<?php

if(isset($_POST['gui'])){
	$file = $_FILES['hinh']; //lấy file từ input
	$tmp_name = $file['tmp_name'];//lấy tên tạm của file
	$duongdan = '../image/'.$file['name'];// đường dẫn lưu file
	$file_size = $file['size'];

	$vitri = strripos($file['name'], '.');

	$file_type = substr($file['name'],$vitri);
	$file_name = substr($file['name'],0,$vitri);
	//echo $file_type;
	//die;
	move_uploaded_file($tmp_name, $duongdan); die;
	$mang = array('.jpg', '.png');
	if(in_array($file_type, $mang)){
		move_uploaded_file($tmp_name, $duongdan);
		echo "success";
	}


	die;
	if($file_size < 80000){
		
		move_uploaded_file($tmp_name, $duongdan);
		echo "success";
	}


}

?>