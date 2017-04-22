<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhập năm dương lịch in ra năm âm lịch</title>
	<style>
		* {
			margin: 0px;
			padding: 0px;
		}

		.content {
			margin: 20px auto;
			border: 1px solid #000;
			width: 600px;
			height: auto;
			text-align: center;
			padding: 10px;
			background-color: #8A00FF;
		}

		input[type=submit] {
			padding: 10px 25px;
			
		}
	</style>
</head>
<body>
	
	<div class="content">
	<?php 

		$year = "";
		$can = "";
		$chi = "";


		if (isset($_POST["nam"]) == true) {$year  = $_POST["nam"];}
		if (is_numeric($year)) {
			
			$can = $year % 10;
			$chi = $year % 12;
			$ican = "";
			$ichi = "";
			$flag = true;

			switch ($can) {
				case 0:
					$ican = "Canh";
					break;
				case 1:
					$ican = "Tân";
					break;
				case 2:
					$ican = "Nhâm";
					break;
				case 3:
					$ican = "Quí";
					break;
				case 4:
					$ican  = "Giáp";
					break;
				case 5:
					$ican = "Ất";
					break;
				case 6:
					$ican ="Bính";
					break;
				case 7:
					$ican  ="Đinh";
					break;
				case 8:
					$ican  ="Mậu";
					break;
				case 9:
					$ican  ="Kỷ";
					break;
				
			}

			switch ($chi) {
				case 0:
					$ichi =  "Thân";
					break;
				case 1:
					$ichi  ="Dậu";
					break;
				case 2:
					$ichi  ="Tuất";
					break;
				case 3:
					$ichi  ="Hợi";
					break;
				case 4:
					$ichi  ="Tí";
					break;
				case 5:
					$ichi  ="Sửu";
					break;
				case 6:
					$ichi  ="Dần";
					break;
				case 7:
					$ichi  ="Mẹo";
					break;
				case 8:
					$ichi  ="Thìn";
					break;
				case 9:
					$ichi  ="Tỵ";
					break;
				case 10:
					$ichi  ="Ngọ";
					break;
				case 11:
					$ichi  ="Mùi";
					break;
				
				default:
					echo "";
					break;
			}
			
		}else{
			$result = "Vui lòng nhập năm";
			$flag = false;
		}
			




	 ?>
		<form action="#" method="post" name="main-form">
			Nhập năm : <input type="text" name="nam" value="<?php echo "$year"; ?>" placeholder="Nhập năm dương lịch">
			<br><br>
			<input type="submit" value="Print">
			<br><br>
			<div style="font-weight: bold;font-size: 25px;color: red">
				<?php 

				if ($flag == true) {
					echo "Năm " . $year . " là " . $ican . " " . $ichi ;
				}else{
					echo $result;
				}
				?>
			</div>

			 

		</form>
	</div>


</body>
</html>