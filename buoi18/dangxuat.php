<?php
session_start();

if(isset($_SESSION['name']) && $_SESSION['password']){
	unset($_SESSION['name']);
	//session_destroy();
	header('Location:session.php');
}


?>