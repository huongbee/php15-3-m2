
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
	//hàm tính tổng
		function tinhtong($so_a,$so_b){
				$tinhtong='';
				for ($i=$so_a; $i <=$so_b; $i++) { 
					$tinhtong+=$i;
				}
				return $tinhtong;
		}
		$tich=1;
		//hàm tính tích
		function tinhtich($so_a,$so_b){
			$tinhtich=1;
				for ($i=$so_a; $i <=$so_b; $i++) { 
					$tinhtich*=$i;
				}
				return $tinhtich;
			}
		//hàm tính tổng các số lẻ
		function tinhtongle($so_a,$so_b){
			$tinhtongle='';
				for ($i=$so_a; $i <=$so_b; $i++) { 
					if ($i%2!=0) {
						# code...
						$tinhtongle+=$i;
					}
				}
				return $tinhtongle;
			
		}
		//hàm tính tổng các số chẵn
		function tinhtongchan($so_a,$so_b){
			$tinhtongchan='';
				for ($i=$so_a; $i <=$so_b; $i++) { 
					if ($i%2==0) {
						# code...
						$tinhtongchan+=$i;
					}
					
				}
				return $tinhtongchan;
		}
		$so_a=$_POST['so_a'];
		$so_b=$_POST['so_b'];
		//điều kiện gọi hàm
		if ($so_a<$so_b) {
			# code...
			$tong=tinhtong($so_a,$so_b);
			$tich=tinhtich($so_a,$so_b);
			$tongle=tinhtongle($so_a,$so_b);
			$tongchan=tinhtongchan($so_a,$so_b);
		}
		else
		{
			$tong="Nhập lại 2 Số";
			$tich="Nhập lại 2 Số";
			$tongle="Nhập lại 2 Số";
			$tongchan="Nhập lại 2 Số";
		}
		



	 ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
				<form action="" method="POST" role="form">
					<legend style="text-align: center; color: red;">Phép Tính 2 Số</legend>
				
					<div class="form-group">
						<label for="">Nhập Số bắt Đầu</label>
						<input type="text" class="form-control" id="" value="<?php echo $so_a; ?>"  name="so_a" placeholder="Nhập Số bắt Đầu">
					</div>
					<div class="form-group">
						<label for="">Nhập Số Kết Thúc</label>
						<input type="text" class="form-control" id=""  value="<?php echo $so_b; ?>" name="so_b" placeholder="Nhập Số Kết Thúc">
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					<div class="form-group">
						<label style="color: #337ab7;" for="">Tổng các Số từ a đến b : <?php echo $tong;  ?></label>
					</div>
					<div class="form-group">
						<label style="color: #337ab7;"  for="">Tích các số từ a đến b : <?php echo $tich;  ?></label>
					</div>
					<div class="form-group">
						<label style="color: #337ab7;"  for="">Tổng các Số chẵn từ a đến b : <?php echo $tongchan;  ?></label>
					</div>
					<div class="form-group">
						<label style="color: #337ab7;"  for="">Tổng các Số lẻ từ a đến b: <?php echo $tongle;  ?></label>
					</div>
					
				</form>
			</div>
	</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		</div>
	</body>
</html>