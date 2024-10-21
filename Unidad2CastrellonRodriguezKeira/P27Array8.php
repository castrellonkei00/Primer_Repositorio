<?php
 /*CBTIS 89
P27Array8.php
Programa que almacena datos en un arreglo
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/

$numeros = range (1,100);
for ($i =0; $i <count ($numeros); $i++){
	if ($numeros[$i] %2 == 0) {
	echo $numeros [$i] . "<br>";
	}
}
?>