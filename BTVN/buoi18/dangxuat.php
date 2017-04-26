<?php
	session_start();
	if(isset($_SESSION['name']) && $_SESSION['password']){
		unset($_SESSION['name']);
		header('Location:session.php');
	}


?>