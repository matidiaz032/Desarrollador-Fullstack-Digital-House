<?php
function triangulo($base,$altura){
return $base * $altura / 2;
}
echo triangulo(8,5);

echo "<br>";

function rectangulo($base,$altura){
  return $base * $altura;
}
echo rectangulo(6,3);

echo "<br>";

function cuadrado($lado){
  return $lado**2;
}
echo cuadrado(6);

echo "<br>";

function circulo($radio){
  return pi() * $radio**2;
}
echo circulo(5);
 ?>
