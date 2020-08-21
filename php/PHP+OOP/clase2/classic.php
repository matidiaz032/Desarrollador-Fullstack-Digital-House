<?php
require 'cuenta.php';

class Classic extends Cuenta {

public function debitar($monto,$origen){
  switch ($origen) {
    case self::ORIGEN_BANELCO:
      $monto *= 1.05;
      break;
    case self::ORIGEN_LINK:
      $monto *= 1.1;
      break;
      case self::ORIGEN_CAJA:
        break;
    default:
      break;
  }
  $this->balance  -= $monto;
  $this->actualizarFechaUltimoMovimiento();
}

public function acreditar($monto){
$monto *= 0.95;
parent::acreditar($monto);
}

public function cobrarServicios($monto){
  $this->debitar(100, cuenta::ORIGEN_SERVICIO);
}

}
 ?>
