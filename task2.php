
<?php
/*Task2 

    * 
   **
  ***
 ****
*****
*/

echo "Task2 </br>";
$n = 5;
for($i=1;$i<=$n;$i++){
    for($space = 1;$space<=$n-$i;$space++){
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>