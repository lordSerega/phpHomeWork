<?php
	$test= "345";
	settype($test,"integer");
	echo gettype($test); echo '<br>';
	$test = (integer)  $test;
	echo gettype($test);
?>