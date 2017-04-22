<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bai Tap Mang</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style type="text/css" media="screen">
	*{
		margin: 0;
		padding: 0;
	}
	.caption a {
		text-transform: uppercase;
	}
	.thumbnail .caption {
    padding: 20px 25px;
    color: #333;
	}
	.col-md-3 {
		padding-top: 50px;
	}
	.menu-top ul{
		float: : left;
	}
	.container-flur {
		background-color: rgba(0, 0, 0, 0.36);
		padding: 30px 0px;
	}
	.menu-main {
		    display: inline-flex;
		    list-style-type: none;
		    padding: 0px 25px;
	}
	.menu-main li {
		padding: 0px 25px;
	}
	.menu-main a{
		color: black;
		text-decoration: none;
	}
	.menu-main a:hover{
		color: #337ab7;
		}
	h2 {
		text-align: center;
	}
</style>
<body>
	<div class="container-flur">
		<ul class="menu-main">
			<?php
					$menu = array("Trang Chủ","Thế giới công nghệ","Giới thiệu","Sản Phẩm","Tin tức");	
						foreach($menu as $key => $value){
							echo '<li><a> '.$value.' </a></li>';					
					}
				?>
		</ul>
	</div>
		<?php 
			$sp = array(
					"sp1" => array("name"=>"htc 11","gia"=>"11.000.00 VND"),
					"sp2" => array("name"=>"iphone 7","gia"=>"19.000.000 VND"),
					"sp3" => array("name"=>"mimax","gia"=>"12.000.000 VND"),
					"sp4" => array("name"=>"samsung s6","gia"=>"7.500.099 VND"),
					"sp5" => array("name"=>"nokia 6","gia"=>"11.500.099 VND"),
					"sp6" => array("name"=>"oppo f1s","gia"=>"9.500.099 VND"),
					"sp7" => array("name"=>"huawei","gia"=>"4.500.099 VND"),
					"sp8" => array("name"=>"huaweii","gia"=>"6.500.099 VND"),
				);
			if(!empty($sp)){
				echo "<h2>Sản Phẩm</h2>";
				foreach($sp as $key => $value){
					$name = $value["name"];
					$gia  = $value["gia"];
					echo '<div class="col-md-3">
								<div class="thumbnail">
									<img src="image/'.$name.'.jpg" alt="">
									<div class="caption">
										<p>
											<a href="#" class="btn btn-primary name"> '.$name.' </a>
											<a href="#" class="btn btn-default gia"> '.$gia.' </a>
										</p>
									</div>
								</div>
							</div>' ;
				}
			}
		?>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>