<?php 
/*CBTIS 89
P30Array11.php
Programa que almacena datos en un arreglo
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/ 

$array_numerico_indexado = array (1, "Gato", 2 , "Perro");
foreach ($array_numerico_indexado as $mascota)
{echo $mascota . "<br>";
}
array_push ($array_numerico_indexado, 3, "Caballo");
foreach ($array_numerico_indexado as $mascota){
	echo $mascota . "<br>";
}
?>