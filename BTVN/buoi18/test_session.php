<?php
	session_start();
	if(isset($_POST['login'])){
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		$a_check=((isset($_POST['nhoTk'])!=0)?1:"");
		
		if($a_check==1){
                setcookie ("user",$_POST['username'],time()+ (10 * 365 * 24 * 60 * 60));  
    			setcookie ("password",$_POST['password'],time()+ (10 * 365 * 24 * 60 * 60));
                }
        else{
        		setcookie("user","",time()-1);
            	setcookie("password","",time()-1);
			
	}
	
        
}	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-4">
			<?php
				if($_SESSION['name'] == "admin" && $_SESSION['password']=='123'){
					echo "Chào bạn, ".$_SESSION['name'];
					

			}
				else{
					header('Location:session.php');
			}




			?>
		</div>
		<div class="col-md-3">
			<a href="dangxuat.php">Đăng xuất</a>
		</div>
	</div>
</body>
</html>