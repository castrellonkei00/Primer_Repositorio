<?php

/*CBTIS 89 
P33Array14.php
Programa que acomoda nombres por medio de un arreglo
Keira Yajira Castrellon Rodriguez 
3° "A" Programacion TM*/

$nombres = array("keira","Axel","Yohali","Luz","Luis","Juan");

sort($nombres);
echo"Datos del arreglo ordenados de manera ascendente con un ciclo for<br>";
for ($i = 0; $i < count($nombres);$i++){
	echo $nombres[$i] . "<br>";
}
array_push($nombres,"Jonathan", "Eduardo","Yajaira","Luis");
array_splice($nombres, 1, 2);

rsort($nombres);
echo "<br>Datos del arreglo ordenados de manera descendente con un ciclo for<br>";
for ($i = 0; $i < count($nombres); $i++){
	echo $nombres[$i] . "<br>";
}
echo "<br>El numero de elementos actual en el arreglo es de: " . count($nombres);
?>