<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=bandienthoaididong', 'root', '');
    $dbh->exec("set names utf8");
    
    $stmt = $dbh->prepare("SELECT * FROM user");
	if ($stmt->execute()) {
	  	while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
	    	print_r($row);
	  	}
	}

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
