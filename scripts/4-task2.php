<?php
   $min=0;
   $max=10;
   $s=range($min,$max);
 
    for ($i=$min; $i<=$max; $i++){
        echo "<br>";
        echo $min+=$s[$i];
    }
?>