<?php

if(isset($_POST['gui'])){

	//print_r($_FILES['hinh']);

	//$hinh = $_FILES['hinh'];
	foreach($_FILES['hinh']['size'] as $size){
		if($size > 1024*100){
			echo "File quá lớn";

			die;
		}
	}

	foreach($_FILES['hinh']['name'] as $key=>$name){
		move_uploaded_file($_FILES['hinh']['tmp_name'][$key], "../image/$name");
	}

	// $file = $_FILES['hinh']; //lấy file từ input
	// $tmp_name = $file['tmp_name'];//lấy tên tạm của file
	
	// $file_size = $file['size']; //lấy lấy file size

	// $vitri = strripos($file['name'], '.'); //vị trí cắt chuỗi ngăn cách bởi dấu chấm

	// $file_type = substr($file['name'],$vitri); //lấy file type
	// $file_name = substr($file['name'],0,$vitri); //lấy file name
	
	// $duongdan = '../image/'.$file_name.rand(11111,99999).$file_type;// đường dẫn lưu file

	// //echo $duongdan = '../image/'.$file['name'];

	// die;
	// move_uploaded_file($tmp_name, $duongdan); 
	// echo 'thành công';


	// die;
	// // $mang = array('.jpg', '.png');
	// // if(in_array($file_type, $mang)){
	// // 	move_uploaded_file($tmp_name, $duongdan);
	// // 	echo "success";
	// // }


	// die;
	// if($file_size < 80000){
		
	// 	move_uploaded_file($tmp_name, $duongdan);
	// 	echo "success";
	// }


}

?>