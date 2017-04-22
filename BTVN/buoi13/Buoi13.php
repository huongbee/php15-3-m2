<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			nav{
				margin: auto;
				background-color: red;
				height: 50px;
			}
			a{
				color: white;
				list-style-type: none;	
			}
			li{
				float: left;
				padding-left: 58px;
			    text-align: center;
			    color: white;
			    font-size: 18px;

    			padding-top: 14px;
    			text-transform: uppercase;
    			list-style-type: none;	
    			font-weight: bold;
			}
			.glyphicon-home{
				font-size: 22px;
				color: blue;
				width: 10px;
			}
			.glyphicon-home:hover{
				color: black;
			}
			li:hover{
				color: black;
				transition: all 0.7s	;
			}

		</style>
	</head>
	<body>
	<div class="container">
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		<?php 
 			$array = array("Thời Sự","Kinh Doanh","Bóng Đá","Thời Trang","Công Nghệ","Tài Khoản")	;

 		 ?>

 		 <nav>
 		 <div class="row">
 		 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 		 	<li><a href="#"><span class="glyphicon glyphicon-home	"></span></a></li>
 		 		
 		 		<ul>
 		 			<?php 
 		 				foreach ($array as$value) {
 		 					# code...
 		 					echo "<li><a href='#'> $value</li>";
 		 				}
 		 			 ?>
 		 		</ul>
 		 	</div>
 		 	</div>
 		 </nav>
 		 <div style="height: 50px;"></div>
 		 <content>
 		 <?php 
 		 	$mangsanpham=array( 
 		 		"1"=>array("Tensp"=>"book1","hinh"=>"image/book1.jpg","gia"=>"99.000"),
 		 		"2"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"3"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"4"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"5"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"6"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"7"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"1"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"8"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"),
 		 		"9"=>array("Tensp"=>"book1","hinh"=>'src="image/book1.jpg"',"gia"=>"99.000"));


 		  ?>
 		 		<div class="row">
 		 		<?php 
 		 			foreach ($mangsanpham as $key => $value) {
 		 				# code...
 		 			
 		 			echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>".
 		 				"<img class='col-xs-9 col-sm-9 col-md-9 col-lg-9 col-md-offset-1' ".$value['hinh'].">
 		 				<div class='col-xs-12 col-sm-12col-md-12 col-lg-12 col-md-offset-4'>".$value['Tensp']."</div>
 		 				<div style=' color:Red;'  class='col-xs-12 col-sm-12 col-md-12 col-lg-12 col-md-offset-4'>".$value['gia']."</div>
 		 			</div>";
 		 		}	
 		 			?>

 		 		</div>
 		 </content>
 		 </div>
	</body>
</html>