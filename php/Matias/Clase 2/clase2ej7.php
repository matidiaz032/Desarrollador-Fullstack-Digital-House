<?php
$tiros=0;
do {
  $moneda = rand(0,1);
  $tiros++;
} while (!$moneda);
echo "Se hicieron $tiros Tiros";
 ?>
