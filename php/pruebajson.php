<?php
$auto=[
  "Marca" => "Ford",
  "Color"=> "Negro"
];
$json=json_encode($auto);
var_dump(json_decode($json,true));
 ?>
