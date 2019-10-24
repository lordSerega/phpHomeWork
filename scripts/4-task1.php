<?php
function calculation($i) 
{
    $res= $i*5;
	echo "$i x 5 = $res";  echo "</br>";
}

for ($i=1; $i<=10; $i++) {
	calculation($i, 5); 
}

?>