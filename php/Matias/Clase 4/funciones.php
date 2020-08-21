<?php
function mayor($num1,$num2,$num3){

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
      $array=[];
      for ($i=$base; $i <= $limite ; $i++) {
        // code...
        $tabla[]=$i;
      }
      return $tabla;
    }
    var_dump (tabla(1,8));
 ?>
