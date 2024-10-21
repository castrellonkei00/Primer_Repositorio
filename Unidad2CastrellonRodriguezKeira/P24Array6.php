<?php
/*CBTIS 89
P24Array6.php
Programa que almacena datos en un arreglo y
posteriormente los imprime 3 
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/

$datos=array(" Programacion "=>" Keira "," Contabilidad "=>" Danna "," Electronica "=>" Axel ","Programacion "=>" Daniel ", " ARH ");
echo "** DATOS DE ALUMNOS DEL CBTIS 89**", "<br>", "<br>";

foreach ($datos as $especialidad=>$nombre)
	{echo "el/la alumn@" . $nombre ." esta en la especialidad de " . $especialidad;
echo "<br>","<br>";
}
?>