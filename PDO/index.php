<?php

try{
	$dbh = new PDO('mysql:host=127.0.0.1;dbname=tintuc', 'root', '');
	$dbh->exec("set names utf8");

	/*$sql = "DELETE FROM comment where idUser=8";
	$result = $dbh->exec($sql);
	var_dump($result);*/
	$query = $dbh->prepare('SELECT * FROM comment');
	$query->execute();
	while ($row = $query->fetch()) {
	 	print_r($row);
	}
	
	


	$dbh = null;
}
catch(PDOException $e){
	echo "Lỗi: ".$e->getMessage();
	die;
}

?>