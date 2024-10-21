<?php

/*CBTIS 89
P32Array13.php
Programa que almacena datos en un arreglo
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/ 

$productos = array("Camisa","Pantalon","Cinturon","Gorra","Calcetines");

echo "Array de productos iniciales: <br>";
foreach ($productos as $producto){
	echo $producto . "<br>";
}
sort ($productos);
echo "<br> Array de productos en orden ascendente:<br>";
foreach ($productos as $producto){
	echo $producto . "<br>";
}
sort($productos);
echo "<br>Array de productos en orden descendientes:<br>";
foreach($productos as $producto){
	echo $producto . "<br>";
}
?>