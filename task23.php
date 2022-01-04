<?php

/* Task 23)

        1
       121
      12321
     1234321
    123454321
*/

echo "<br>Task 23<br>";

$n = 7;
for($i=1; $i<=$n; $i++) //it will count rows
{
 for($j=$n; $j>$i; $j--) //it will add space
  echo "&nbsp;&nbsp;&nbsp;&nbsp;";
 for($k=1; $k<=$i; $k++)
  echo "&nbsp".$k. "&nbsp";
 $n = $k - 1;
 for($m=1; $m<$i; $m++)
  echo "&nbsp".--$n. "&nbsp";
 echo "<br>";
}

?>