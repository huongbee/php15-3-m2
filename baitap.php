<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tính Tổng Hai Số</title>
  <meta name="author" content="duongvo">
  <meta name="description" content="bài tập tính hai số">
  <meta name="keyword" content="php css html">
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
    
    span {
      font-weight: bold;
      font-size: 20px;
      color: white;
    }
    
    input[type=text] {
      width: 200px;
      height: 30px;
    }
  </style>
</head>

<body>

  <?php

$n1 		= "";
$cal 		= "";
$n2 		= "";
$result		= "";
$flag		= "";

if (isset($_POST["number1"])==true && isset($_POST["caculate"])==true && isset($_POST["number2"])==true) {
    $n1 	= $_POST["number1"];
    $cal 	= $_POST["caculate"];
    $n2 	= $_POST["number2"];
    
    $flag = true;
    if (is_numeric($n1) && is_numeric($n2)) {
        switch ($cal) {
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                case 'X':
                    case 'x':
                        $result = $n1 * $n2;
                        break;
                    case '/':
                        case ':':
                            $result = $n1 / $n2;
                            break;
                        case '%':
                            $result = $n1 % $n2;
                            break;
                        
                        default:
                            $result = $n1 + $n2;
                            $cal = "+";
                            break;
                }
            }else{
                $result = "<h3>Không thực hiện được</h3>";
                $flag = false;
            }
        }
        
        ?>

    <div class="content">
      <form action="#" method="post" name="main-form">
        <h1 style="color: red;">Tính tổng hai số</h1>
        <br>
        <br>
        <span>Số thứ nhất :</span>
        <br>
        <br>
        <input type="text" name="number1" value="<?php echo $n1; ?>" placeholder="Vui lòng nhập số thứ nhất">
        <br>
        <br>
        <span>Phép tính</span>
        <br>
        <br>
        <input type="text" name="caculate" value="<?php echo $cal; ?>" placeholder="Vui lòng nhập phép tính : + - * / % ">
        <br><br>
        <span>Số thứ hai :</span>
        <br><br>
        <input type="text " name="number2 " value="<?php echo $n2; ?>" placeholder="Vui lòng nhập số thứ hai">
        <br>
        <br>
        <input type="submit" value="Xem kết quả" name="submit" style="padding: 10px">
        <br>
        <br>
        <p style="font-size: 20px; font-weight: bold;">
          <?php
        if ($flag == true) {
            echo "Kết quả ". $n1 . " ". $cal . " " . $n2 . " = " . $result;
        }else {
            echo $result;
        }
        ?>
        </p>
      </form>
    </div>


</body>

</html>