<?php
/*CBTIS 89 
P41Array21.php
Programa que almacena en un arreglo llamado
$compras el valor de 6 compras,posteriormente
en otros arreglos se deben almacenar informacion
de acuerdo a las siguientes condiciones:
El contenido del arreglo $Descuentos se llenara 
de la siguiente manera:
Compra menor 300=0
Compra mayor 300 y menor o igual 1000=10%
Compra mayor 1000 y menor o igual a 2500=15%
Compra mayor 2500 y menor o igual a 5000=20%
Compra mayor 5000 = 25%
Keira Yajaira Castrellon Rodriguez 
3° "A" TM Programacion */

$Compras = array(800, 2700, 1900, 150, 7600, 1000);
$Descuentos=array();
$Total=array();
$Porcentaje=array();
$Descu=0;
echo "Precio","---"," Total ","-----","Descuentos","------","Porcentaje","<br>";
for ($i=0; $i<6; $i++) {
	if ($Compras[$i]<300)
	{array_push($Porcentaje,0);}
    else if ($Compras[$i]>300&&$Compras[$i]<=1000)
	{array_push($Porcentaje,10);}
    else if ($Compras[$i]>1000&&$Compras[$i]<=2500)
	{array_push($Porcentaje,15);}
    else if ($Compras[$i]>2500&&$Compras[$i]<=5000)
	{array_push($Porcentaje,20);}
    else if ($Compras[$i]>5000)
	{array_push($Porcentaje,25);}}
for ($i=0; $i<6; $i++)
{$Descu=$Compras[$i]*$Porcentaje[$i]/100;
array_push($Descuentos,$Descu);}
for ($i=0; $i<6; $i++)
{$Total[$i]=$Compras[$i]-$Descuentos[$i];
echo $Compras[$i],"--------",$Descuentos[$i],"-------------",$Total[$i],"--------------",$Porcentaje[$i],"%","<br>";}
?> 