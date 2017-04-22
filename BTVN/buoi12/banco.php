<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mau.css">
</head>
<body>
		<div class="banco">
			<?php
				$i=1;
				$j=1;
				$mau='';
					while($i<=8) { 
					while($j<=8) { 
						if(($j+$i)%2==0)
							echo '<div class="oco trang"></div>';
						else
							echo '<div class="oco den"></div>';
						$j++;
					}
					$i++;
					$j=1;
				}
			?>
		</div>
</body>
</html>
