<?php 
/*CBTIS 89 
Examen3CastrellonRodriguez.php
Programa que almacena el nombre de cuatro articulos en un arreglo y
 en otro arreglo multidimencional almacena los precios 
 correspondientes de 3 meses esto se hace por medio de filas y columnas 
 Keira Yajaira Castrellon Rodriguez 
 Programacion 3° "A" TM*/

 $Productos=array("Vestido","Pantalon","Cinturon","Camiseta");
 $Precio=array(
 	array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$Subtotal=array();
$Promedio=array();


 echo "TIENDA DE ROPA";	
 echo "<br>";

echo "Productos","-----","Subtotal","-----","Promedio","<br>";

for($i=0;$i<4;$i++)
      {for($j=0;$j<4;$j++)
      	if ($Subtotal[$i]=500+600+550)
	{array_push($Promedio,550);}}
   
   for($i=0;$i<4;$i++)
      {for($j=0;$j<4;$j++)
      	if ($Subtotal[$i]=800+700+600)
	{array_push($Promedio,700);}}
   
     for($i=0;$i<4;$i++)
      {for($j=0;$j<4;$j++)
      	if ($Subtotal[$i]=400+200+300)
	{array_push($Promedio,300);}}

for($i=0;$i<4;$i++)
      {for($j=0;$j<4;$j++)
      	if ($Subtotal[$i]=500+200+500)
	{array_push($Promedio,400);}}

 for ($i=0; $i<4; $i++)
echo $Productos[$i],"--------",$Subtotal[$i],"-------------",$Promedio[$i],"<br>";




?> 