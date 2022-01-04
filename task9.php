<?php
/*Task 9

    A
    BB
   CCC
   DDDD
   EEEEE
   */

  echo "<br>Task9<br>";

  $alpha = range('A','Z');
  $n = 5;
  for($i=0;$i<$n;$i++){
      for($space = 1;$space<=$n-$i;$space++){
          echo "&nbsp";
      }
      for($j=0;$j<=$i;$j++){
          echo $alpha[$i];        
      }
      echo "<br>";
  }
?>  