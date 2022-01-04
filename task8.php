<?php
/*Task 8 )
A 
BC
DEF
GHIJ
KLMNO
 */

echo "<br>Task8<br>";
$alphabet = range('A','Z');
$k=0;
$n =5;
for($i=0;$i<$n;$i++){
    for($j=0;$j<=$i;$j++){
        echo $alphabet[$k];
        $k++;
    }echo "<br>";
}
?>