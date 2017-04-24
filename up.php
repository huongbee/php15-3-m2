<?php

if(isset($_POST['upload'])){
	print_r($_FILES);

	// foreach ($_FILES['file']['name'] as $file => $name) {
	// 	move_uploaded_file($_FILES["file"]["tmp_name"][$file], 'image/'.$name);
	// }

	// foreach ($_FILES['file']['size'] as $size){
	// 	if($size>1024*500){
	// 		echo "file quá lớn";
	// 		exit;
	// 	}
	// }
	foreach ($_FILES['file']['name'] as $file => $name) {
		move_uploaded_file($_FILES["file"]["tmp_name"][$file], 'images/'.$name);
	}


	/*$file = $_FILES["file"];
	$filename = $file['name'];
	$file_ext = substr($filename, strripos($filename, '.')); //trả về vị trí cuối cùng
	$filetype = array('.pdf','.jpeg');
	if(empty($filename)){
		echo "vui lòng chọn file";
	}
	elseif(in_array($file_ext, $filetype)){
		if(file_exists('image/'.$filename)){
			echo "Đã tồn tại file";
			exit;
		}
		if($file['size']>1024*1000){
			echo "file quá lớn";
			exit;
		}
		else{
			$flag = move_uploaded_file($file['tmp_name'], 'image/'.$filename);
			echo "success";
		}
	}
	else{
		echo "các file được phép upload: ".implode(', ', $filetype);
	}*/
}

?>