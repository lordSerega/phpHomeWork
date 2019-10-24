<?php
echo var_dump(1 == TRUE); echo "<br>";  // TRUE - то же, что и (bool)1 == TRUE
echo var_dump(0 == FALSE); echo "<br>"; // TRUE - то же, что и (bool)0 == FALSE
echo var_dump(100 < TRUE);  echo "<br>";// FALSE - то же, что и (bool)100 < TRUE
echo var_dump(-10 < FALSE); echo "<br>";// FALSE - то же, что и (bool)-10 < FALSE
echo var_dump(null < string); echo "<br>";
echo var_dump(array(1) > "11");echo "<br>";
echo var_dump("11" > 111);echo "<br>";
echo var_dump(object < "11");echo "<br>";

?>