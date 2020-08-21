<?php
$nota= rand(-1,10);
switch ($nota) {
case 1:
case 2:
case 3:
  echo "Desaprobado";
  break;
case 4:
case 5:
echo "Safamos";
  break;
  case 6:
  case 7:
  case 8:
  echo "Bien!!!";
    break;
    case 9:
  echo "Muy Bien!";
      break;
  case 10:
  echo "Excelente!!!";
    break;
  default:
    echo "El numero no es valido";
    break;
}
 ?>
