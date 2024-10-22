<?php
/*CBTIS 89
PROGRAMA QUE ALMACENA DATOS DE UN ARREGLO PARA SABER CUAL ES EL ACOMODO DE MANERA ASCENDENTE Y DESCENDENTE Y ASI MISMO LOS ACOMODA 
KEIRA YAJIRA CASTRELLON RODRIGUEZ 
PROGRAMACION 3° "A" 
*/
$edades = array("18","50","12","8","16","15");
sort($edades);
echo"*DATOS  ORDENADOS DE MANERA ASCENDENTE* <br>";
for ($i = 0; $i < count($edades);$i++){
	echo $edades[$i] . "<br>";}
array_push($edades,"18","50","12","8");
array_splice($edades, 1, 2);
rsort($edades);
echo "<br>*DATOS ORDENADOS DE MANERA DESCENDENTE* <br>";
for ($i = 0; $i < count($edades); $i++){
	echo $edades[$i] . "<br>";}
echo "<br>EL NUMERO DE ELEMENTOS ACTUAL ES DE:" . count($edades);
?>