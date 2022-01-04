<?php
/*Task 18 )
1
23
456
78910
1112131415
*/
echo "<br>Task18<br>";
$n = 5;
$k =1;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo $k;
        $k++;
    }echo "<br>";
}
?>