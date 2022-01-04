<?php
/*Task 21 )
 55555
 4444
 333
 22
 1
 */

echo "<br>Task 21<br>";
$n=5;
for($i=$n;$i>=1;$i--){
    for($k=0;$k<$n-$i;$k++){
    echo "&nbsp;";
    }
 for($j=1;$j<=$i;$j++){
        echo $i."&nbsp";
 }
    echo "<br>";
}
?>