
 <table width="320px" cellspacing="0px" cellpadding="0px" border="1px">  
      
	  <!-- Ô có độ rộng 320px (8 cột x 40px) -->  
 <?php
 //ban co vua
 	for($i=1; $i <= 8; $i++)  
      {  
          echo "<tr>";  
          for($j=1; $j <=8; $j++)  
          {  
            $total=$i + $j;  
            if($total%2 == 0)  
            {  
            	//chieu rong o la 40
              echo "<td height=40px width=40px bgcolor=#FFFFFF></td>";  
            }  
            else  
            {  
              echo "<td height=40px width=40px bgcolor=#000000></td>";  
            }  
          }  
          echo "</tr>";  
      }  
      
 ?>
 </table>
