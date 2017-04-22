<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <form method="GET">
         Số thứ 1: <input type="text" name="so_a"  placeholder="Nhập số thứ 1">
          <br><br>
         Số thứ 2: <input type="text" name="so_b"  placeholder="Nhập số thứ 2">
          <br><br>
         Phép tính: <input type="text" name="toan_tu"  placeholder="Nhập  + -  /">      
          <br><br>
          <button type="submit" >Tính</button> 
          <br><br>
       </form>
      <?php        
         
         if(isset($_GET['so_a']) && isset($_GET['so_b']) && isset($_GET['toan_tu'])){
              if (!is_numeric($_GET['so_a']) || !is_numeric($_GET['so_b'])) {
         	      echo "<br><br>";
                  echo 'Canh bao: Ban phai nhap so !!!';
                  exit();
                }
      

             if (($_GET['toan_tu']) == '+') {
                 echo "Kết quả phép cộng:" .($_GET['so_a'] + $_GET['so_b']);
               }
             else if (($_GET['toan_tu']) == '-') {
                 echo "Kết quả phép trừ:" .($_GET['so_a'] - $_GET['so_b']);;
               }
             else if (($_GET['toan_tu']) == '/') {
                 echo "Kết quả phép chia:" .($_GET['so_a'] / $_GET['so_b']);;
               }
             else if (($_GET['toan_tu']) == '*') {
                 echo "Kết quả phép cộng:" .($_GET['so_a'] * $_GET['so_b']);;
         }
             else {
                 echo "Vui lòng nhập lại phép tính";
           
        } 
         }
         ///
        
         else{
         	echo "Vui lòng nhập 2 số";
         }

      ?>

     </body>
</html>