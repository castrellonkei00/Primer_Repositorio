<?php

/*CBTIS 89
P21Array3.php
Programa que almacena los nombres en un arreglo y posteriormente los imprime por medio de un ciclo 
for
keira yajaira castrellon rodriguez 
3° "A" Programacion TM */

$arraynombres= array("luis", "Flor", "Diego", "keira", "Pepe", "Axel");

//Se obtiene el numero de elementos
$longitud=count($arraynombres);

//Recorre todos los elementos
for ($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemento
echo $arraynombres[$i];
echo "<br>";
}
?>

