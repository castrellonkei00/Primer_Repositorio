<?php
/*CBTIS 89
P39Array19.php
Programa que almacena informacion de 6 personas y dependiendo
de su edad los contabiliza en diversos arreglos de acuerdo a 
las siguientes condiciones Menor de 18 grupo 1, mayor de 18 grupo 2, mayor a 50 grupo 3.
Keira Yajaira Castrellon Rodriguez
Programacion 3° "A" TM */

$Nombre=array("Laura","Keira","Maria","Rosa","Yohali","Luis");
$Edad=array(17,30,71,38,12,58);
$Grupo1=array();
$Grupo2=array();
$Grupo3=array();
$Longitud=count($Edad);

for ($i=0;$i<$Longitud;$i++)
	{if ($Edad[$i]<17)
		{array_push($Grupo1,1);
		 array_push($Grupo2,0);
	     array_push($Grupo3,0);}
	 }
	 for ($i=0;$i<$Longitud;$i++)
	{if ($Edad[$i]<30)
		{array_push($Grupo1,0);
		 array_push($Grupo2,1);
	     array_push($Grupo3,0);}
	 }
for ($i=0;$i<$Longitud;$i++)
	{if ($Edad[$i]<71)
		{array_push($Grupo1,0);
		 array_push($Grupo2,0);
	     array_push($Grupo3,1);}
	 }
for ($i=0;$i<$Longitud;$i++)
	{if ($Edad[$i]<38)
		{array_push($Grupo1,0);
		 array_push($Grupo2,1);
	     array_push($Grupo3,0);}
	 }
for ($i=0;$i<$Longitud;$i++)
	{if ($Edad[$i]<12)
		{array_push($Grupo1,1);
		 array_push($Grupo2,0);
	     array_push($Grupo3,0);}
	 }
	 for ($i=0;$i<$Longitud;$i++)
	{if ($Edad[$i]<58)
		{array_push($Grupo1,0);
		 array_push($Grupo2,0);
	     array_push($Grupo3,1);}
	 }
	 echo"<br>";
	 echo "&nbsp"."CBTIS89"."<br>";
	 echo "Nom"."&nbsp"."Edad"."Gpo1"."Gpo2"."Gpo3"."<br>";
	 for ($i=0;$i<6;$i++)
	 	{echo $Nombre[$i]."---".$Edad[$i]."---".$Grupo1[$i]."---".$Grupo2[$i]."---".$Grupo3[$i]."<br>";}
	?>