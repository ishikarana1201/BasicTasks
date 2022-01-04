<?php
/*
Task4
*****
 ****
  ***
   **
    *
*/
echo "</br>Task4 </br>";
$n =5;
for($i=1;$i<=$n;$i++){
    for($k=1;$k<=$i-1;$k++){
        echo "&nbsp;&nbsp";
    }
    for($j=$n;$j>=$i;$j--){
        echo "*";
    }echo "<br>";
}
 ?>