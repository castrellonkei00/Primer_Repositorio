<?php
/*CBTIS 89
P22Array4.php
Programa que almacena datos en un arreglo y
posteriormente los imprime 
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/

$equipo= array("portero "=>"Julio ","defensa "=>"Diego ", "medio "=> "Jair ","Delantero "=>"Rafa ");
echo "** SELECCION NACIONAL **","<br>", "<br>";
foreach($equipo as $posicion=>$jugador)
{echo " El jugador ". $jugador . " es el " . $posicion;
echo "<br>","<br>";
}
?>