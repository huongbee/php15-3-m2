
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
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
	</head>
	<body>
		<?php 
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$_POST['c'];
			
			function GiaiPT1($a,$b){
				$x='';
				if (isset($a) && isset($b)) {
					if($a==0 && $b==0)
					{
						$x='Phương trình Vô số Nghiệm.';
					}
					if ($a==0&& $b!=0) {
						$x='Phương trình vô nghiệm';
					}
					if($a!=0)
					 $x= 'phương trình có nghiệm x là :'.((-$b)/$a);
					}
				return $x;
			}
			function GiaiPT2($a,$b,$c){
				$x1='';
				$x2='';
				$delta='';
				$truyvan='';
				if($a != 0 &&$b!=0 &&$c!=0)
				    {
				        $deta = $b*$b - 4*$a*$c;

				        if($deta > 0)
				        {

				            $x1 = (-$b + sqrt($deta)) / 2*$a;
				            $x2 = (-$b - sqrt($deta)) / 2*$a;
				            $truyvan='phuong trình có hai nghiệm là:'.'x1='.$x1.' và x2='.$x2;

				  
				        }
				        else if($deta == 0)
				        	$truyvan="phuong trinh co nghiem kep x = ". (-$b/2*$a);
				        else
				            $truyvan="phuong trinh vo nghiem";

				        return $truyvan;
				    }
				 else
				 	$truyvan=GiaiPT1($b,$c);
				}
			$x=GiaiPT1($a,$b);
			$truyvan=GiaiPT2($a,$b,$c);


		 ?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<div class="container">

			<div class="row">
			<form action="" method="POST" role="form">
						<legend style="text-align: center; color: red;"><h1>Giải Phương trình</h1></legend>
				<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4">
					<label>Phương trình bậc 1 có Dạng: ax+b=0</label>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4">
					<label>Phương trình bậc 2 có Dạng: ax^2+bx +c = 0</label>
				</div>
			</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

						<div class="form-group">
							<label class="col-md-offset-3" >nhập tham số a</label>
							<input type="text" class="form-control" name="a" <?php echo $a; ?> id="" placeholder="Số a">
						</div>	
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

						<div class="form-group">
							<label for="" class="col-md-offset-3">nhập tham số b</label>
							<input type="text" class="form-control" <?php  echo $b; ?> name="b" id="" placeholder="Số b">
						</div>	
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

						<div class="form-group">
							<label class="col-md-offset-3" >nhập tham số c</label>
							<input type="text" class="form-control" name="c" <?php echo $a; ?> id="" placeholder="Số a">
						</div>	
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-4">

						<div class="form-group">
							<label for="">Phương trình Bậc 1: <?php echo $x; ?></label>
						</div>	
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-4">

						<div class="form-group">
							<label for="">Phương trình Bậc 2: <?php echo $truyvan; ?></label>
						</div>	
				</div>

				<button type="submit" name="submit" class="btn btn-primary col-md-offset-5">Submit</button>
				</div>
				
			</form>		
			
		</div>
	</body>
</html>