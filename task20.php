<?php
/*Task 20 )
   1
   22
   333
  4444
 55555
*/

echo "<br>Task 20<br>";
$n = 5;
for($i=1;$i<=$n;$i++){  
    for($j=$n;$j>$i;$j--)
        echo "&nbsp;";
        for($k=1;$k<=$i;$k++)
            echo $i."&nbsp;";
        
        echo "<br>";
    
}
?>