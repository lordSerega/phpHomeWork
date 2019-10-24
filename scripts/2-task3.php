<?php
// Правильные имена констант
 define("FOO",     "something");
 define("FOO2",    "something else");
 define("FOO_BAR", "something more");
// Неправильные имена констант
 define("2FOO",    "something");
// Это корректное объявление, но лучше его не использовать:
// PHP однажды может зарегистрировать "волшебную" константу,
// которая сломает ваш скрипт
 define("__FOO__", "something");
 echo __FOO__;

?>
