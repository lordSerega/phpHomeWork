<?php
	// Работает, начиная с версии PHP 5.3.0
	const CONSTANT = 'Здравствуй, мир.';
	echo CONSTANT;

	// Работает, начиная с версии PHP 5.6.0
	const ANOTHER_CONST = CONSTANT.'; Прощай, мир.';
	echo ANOTHER_CONST;
?>
