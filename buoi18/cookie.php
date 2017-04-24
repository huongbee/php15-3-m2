<?php
$cookie_name = "user";
$cookie_value = "Huong Huong";
//setcookie('user', $cookie_value, time()+120, "http://localhost/php15-3_/buoi18");

setcookie('user', $cookie_value, time()-120, "http://localhost/php15-3_/buoi18");

if($_COOKIE[$cookie_name]){
	echo "Đã có cookie";
}
else{
	echo "Chưa có cookie";
}


?>