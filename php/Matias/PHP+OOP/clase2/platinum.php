<?php
require 'cuenta.php';

class Platinum extends Cuenta{
public function debitar($monto,$origen){
  if ($balance <5000 && $origen != self::ORIGEN_SERVICIO) {
    $monto *= 1.05;
  }
  $this->balance -= $monto;
  $this->actualizarFechaUltimoMovimiento();
}

public function cobrarServicios($monto){
  $this->debitar($this->balance/10, self::ORIGEN_SERVICIO);
}
}
 ?>
