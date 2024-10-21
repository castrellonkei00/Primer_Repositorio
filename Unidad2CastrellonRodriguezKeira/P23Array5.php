<?php
/*CBTIS 89
P23Array5.php
Programa que almacena datos en un arreglo y
posteriormente los imprime 2 
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/
$Frutas= array("Manzana "=>" $25 ","Mango"=>" $40","limon " => " $35" ," Naranja "=>" $20 ");
echo "** FRUTERIA DEL SUR **","<br>", "<br>";
foreach($Frutas as $fruta=>$precio)
{echo " El kilo de ". $fruta . " cuesta " . $precio;
echo "<br>","<br>";
}
?>