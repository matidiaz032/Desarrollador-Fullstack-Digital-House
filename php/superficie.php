<?php

function triangulo($base,$altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
return $base * $altura / 2;
}
echo triangulo(8,5);

echo "<br>";

function rectangulo($base,$altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * $altura;

}
echo rectangulo(6,3);

echo "<br>";

function cuadrado($lado){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $lado**2;
}
echo cuadrado(6);

echo "<br>";

function circulo($radio){
global $funcionesEjecutadas;
$funcionesEjecutadas++;
  return pi() * $radio**2;
}
echo circulo(5);

 ?>
