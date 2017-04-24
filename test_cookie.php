<?php
$cookie_name = 'test_cookie';
setcookie($cookie_name, '123456', time() + 30, "http://localhost/php15-3_");


if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>