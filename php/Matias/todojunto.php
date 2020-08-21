<?php
$funcionesEjecutadas= 0;

include "funciones.php";

include "superficie.php";

function supMayor($radio1,$radio2,$radio3){
  return mayor(circulo($radio1),circulo($radio2),circulo($radio3));
}
echo "<br>";
echo supMayor(10,5,22);
echo "<br>";
echo $funcionesEjecutadas;
echo "<br>";
echo strpos("Me encanta php, a mi también me encanta php!","php");
 ?>
