<?php
	$A = true;
	$B = false;
	$C = true;
	
	echo $A and (!$B or $C); echo "<br>";
	echo !($A and $B) or $C; echo "<br>";
	echo $B or ($C and !$A); echo "<br>";
 ?>