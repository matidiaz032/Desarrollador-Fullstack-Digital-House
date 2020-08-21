<?php
$a=["a"=>"1", "b"=>"2", "c"=> "Yo <3 JSON"];
$a=json_encode($a);
$b=json_decode($a,true);
var_dump($a);
var_dump($b);
echo $b['c']." | ".$b['a']." | ".$b['b']." | ";
 ?>
