<?php
/*CBTIS 89
P28Array9.php
Programa que almacena datos en un arreglo
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/ 

$ropa = array ("playera"=>"100", "Camisa"=>"250", "Pantalon"=>"300", "Bermuda"=>"200");
echo "**TIENDA DE ROPA MASUKY**","<br>","<br>";
foreach ($ropa as $x => $precio)
	{ echo "La prenda " . $x . " esta en ". $precio;
echo "<br>", "<br>";
}
?>