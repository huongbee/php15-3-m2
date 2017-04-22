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
			$duonglich='';
			$Can='';
			$Chi='';
			$flag1='';
			$flag2='';
			$amlich='';
			$duonglich=$_POST['dl'];
			if (isset($_POST['click'])) {
				if(!empty($duonglich)&&is_numeric($duonglich))
				{
					$Can=$_POST['dl']%10;
					switch ($Can) {
						case 0:
							$can='Canh';
							break;
						case 1:
							$can='Tân';
							break;
						case 2:
							$can='Nhâm';
							break;
						case 3:
							$can='Quý';
							break;
						case 4:
							$can='Giáp';
							break;
						case 5:
							$can='Ất';
							break;
						case 6:
							$can='Bính';
							break;
						case 7:
							$can='Đinh';
							break;
						case 8:
							$can='Mậu';
							break;
						case 9:
							$can='Kỳ';
							break;
						
						default:
							echo 'Nhập Năm Chính Xác';
							break;
					}
					$Chi=$_POST['dl']%12;
					switch ($Chi) {
						case 4:
							$Chi='Tí';
							break;
						case 5:
							$Chi='Sửu';
							break;
						case 6:
							$Chi='Dần';
							break;
						case 7:
							$Chi='Mão';
							break;
						case 8:
							$Chi='Thìn';
							break;
						case 9:
							$Chi='Tị';
							break;
						case 10:
							$Chi='Ngọ';
							break;
						case 11:
							$Chi='Mùi';
							break;
						case 0:
							$Chi='Thân';
							break;
						case 1:
							$Chi='Dậu';
							break;
						case 2:
							$Chi='Tuất';
							break;
						case 3:
							$Chi='Hợi';
							break;
						
						default:
							
							break;
					}
				}
				$amlich=$can.' '.$Chi;
			}


		 ?>
		<div class="container">
			<table class="table table-hover">
				<thead>
					<tr>
						<th> Can</th>
						<th> Giáp</th>
						<th> Ất</th>
						<th> Bính</th>
						<th> Đinh</th>
						<th> Mậu</th>
						<th> Kỳ</th>
						<th> Canh</th>
						<th> Tân</th>
						<th> Nhâm</th>
						<th> Quý</th>
					</tr>

				</thead>
				<tbody>
					<tr>
						<td> N Mod 10</td>
						<td> 4</td>
						<td> 5</td>
						<td> 6</td>
						<td> 7</td>
						<td> 8</td>
						<td> 9</td>
						<td> 0</td>
						<td> 1</td>
						<td> 2</td>
						<td> 3</td>
					</tr>
				</tbody>
			</table>
			<table class="table table-hover">
				<thead>
					<tr>
						<th> Chi</th>
						<th> Tí</th>
						<th> Sửu</th>
						<th> Dần</th>
						<th> Mão</th>
						<th> Thìn</th>
						<th> Tị</th>
						<th> Ngọ</th>
						<th> Mùi</th>
						<th> Thân</th>
						<th> Dậu</th>
						<th> Tuất</th>
						<th> Hợi</th>
					</tr>

				</thead>
				<tbody>
					<tr>
						<td> N Mod 12</td>
						<td> 4</td>
						<td> 5</td>
						<td> 6</td>
						<td> 7</td>
						<td> 8</td>
						<td> 9</td>
						<td> 10</td>
						<td> 11</td>
						<td> 0</td>
						<td> 1</td>
						<td> 2</td>
						<td> 3</td>
					</tr>
				</tbody>
			</table>
			<form action="" method="POST" role="form">
				<legend style="color: #6a92b7;text-align: center;">Tính Năm Âm Lịch</legend>
			
				<div class="form-group">
					<label for="">Năm Dương Lịch</label>
					<input type="text" class="form-control" name="dl" id="" placeholder="Năm Dương Lịch" value="<?php echo $duonglich; ?>">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-5 col-xs-offset-5 col-sd-offset-5 col-lg-offset-5">
						<button type="submit" class="btn btn-primary" name="click">Chuyển Đổi</button>
						<div class="form-group">
							<label for="">Năm Âm Lịch</label><br>
							<label style="border: 5px; border-color: black;color: red;text-align: center;"> <?php echo $amlich ?></label>
						</div>
					</div>
				</div>
			</form>
		</div>
		
	</body>
</html>