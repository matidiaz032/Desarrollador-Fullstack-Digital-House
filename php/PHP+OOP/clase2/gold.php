<?php
require 'cuenta.php';

class Gold extends Cuenta {

  public function debitar($monto,$origen){
    if ($origen==self::ORIGEN_LINK) {
      $monto *= 1.05;
    }
    $this->balance  -= $monto;
    $this->actualizarFechaUltimoMovimiento();
  }

  function public acreditar($monto){
    if ($monto<25000) {
      $monto *= 0.97;
    }
    parent::acreditar($monto);
  }

  public function cobrarServicios($monto){
    $this->debitar($monto,Cuenta::ORIGEN_SERVICIO);
  }
}
 ?>
