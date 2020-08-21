<?php
$numeroMagico= 10;

function mayor($num1,$num2,$num3=null){
global $funcionesEjecutadas;
$funcionesEjecutadas++;
if ($num3==null) {
  // code...
  global $numeroMagico;
  $num3=$numeroMagico;
}
if ($num1 > $num2 && $num1 > $num3) {
  $mayor=$num1;
}
  else if ($num2 > $num3) {
    $mayor=$num2;
}
    else {
      $mayor=$num3;
    }
    return $mayor;
  }
    echo mayor(20,30,15);

    echo "<br>";

    function tabla($base,$limite){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
      $array=[];
      for ($i=$base; $i <= $limite ; $i++) {
        // code...
        $tabla[]=$i;
      }
      return $tabla;
    }
    var_dump (tabla(1,8));

 ?>
