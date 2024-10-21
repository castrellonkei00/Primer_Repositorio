<?php

/*CBTIS 89
P31Array12.php
Programa que almacena datos en un arreglo
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/ 


$arraynumerico = array (1,3,2,5,4,7,6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<br>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>
