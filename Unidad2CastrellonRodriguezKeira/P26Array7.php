<?php
/*CBTIS 89
P25Array7.php
Programa que almacena datos en un arreglo
Keira Yajaira Castrellon Rodriguez 
3° "A" Programacion TM*/

   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>