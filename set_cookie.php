<?php
$cookie_name = 'test_cookie';
setcookie($cookie_name, '123456', time() + 30, "http://localhost/php15-3_");
echo "Value is: " . $_COOKIE[$cookie_name];
?>