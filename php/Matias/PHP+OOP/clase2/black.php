<?php
require 'cuenta.php';

class Black extends Cuenta{

  public function debitar($monto,$origen){
    $this->balance -= $monto;
    $this->actualizarFechaUltimoMovimiento();
  }

  function public acreditar($monto){
    if ($monto>1000000) {
      $monto *= 0.96;
    }
    parent::acreditar($monto);
  }

  public function cobrarServicios($monto){
  $diaDeLaSemana = date('N', strtotime($this->getUltimoMovimiento()));
  $montoACobrar = 500 + 100 * $diaDeLaSemana;
  $this->debitar($montoACobrar, self::ORIGEN_SERVICIO);
  }
}
 ?>
