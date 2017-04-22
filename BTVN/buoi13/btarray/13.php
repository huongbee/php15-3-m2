<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="duongvo">
    <meta name="email" content="vanduongitpro@gmail.com">
    <meta name="description" content="">
  	<meta name="keyword" content="duongvo">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        #container {
            margin-top: 30px;
            text-align: center;
            padding: 5px;
        }

        .name-sp {
            font-weight: bold;
            font-size: 20px;
            margin-top: 5px;
        }

        .gia {
            font-size: 16px;
            color: red;
            font-weight: bold;
        }
    </style>
  </head>
  <body>

        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">KhoaPhamPHP</a>
            </div>
            <ul class="nav navbar-nav">
              <?php 

                $array = array("IPHONE","SAMSUNG","NOKIA","ASUS ","ACER");
                array_push($array, "HTC");

                foreach ($array as $key => $value) {
                    echo '<li role="presentation" class="active"><a href="#"> '.$value.'</a></li>';
                }

                 ?>
            </ul>
          </div>
        </nav>
        
    <div class="container" id="container">   
        <div class="row">
            
                <?php 

                    $mangsp = array();
                    $mangsp["SP001"] = array("image" => "iphone7.png", "name" => "IPHONE 7 RED", "gia" => 20000000); 
                    $mangsp["SP002"] = array("image" => "nokia.png", "name" => "NOKIA 3110", "gia" => 2000000);
                    $mangsp["SP003"] = array("image" => "s8.png", "name" => "SAMSUNG S8", "gia" => 17000000);
                    $mangsp["SP004"] = array("image" => "iphone7.png", "name" => "IPHONE 7 RED", "gia" => 20000000); 
                    
                    $mangsp["SP005"] = array("image" => "nokia.png", "name" => "NOKIA 3110", "gia" => 2000000);
                    $mangsp["SP006"] = array("image" => "s8.png", "name" => "SAMSUNG S8", "gia" => 17000000);
                    $mangsp["SP007"] = array("image" => "nokia.png", "name" => "NOKIA 3110", "gia" => 2000000);
                    $mangsp["SP008"] = array("image" => "s8.png", "name" => "SAMSUNG S8", "gia" => 17000000);

                    if (!empty($mangsp)) {
                        foreach ($mangsp as $key => $value) {
                            echo ' <div class="col-md-3">
                                            <img src="img/'.$value["image"].'">
                                            <p class="name-sp">'.$value["name"].'</p>
                                            <p class="gia">Giá : '.number_format($value["gia"]).' vnd</p>
                                    </div>';           
                        }
                    }            
                       

                 ?>          
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>