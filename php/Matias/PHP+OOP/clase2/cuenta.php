<?php
// require 'cliente.php';
abstract class Cuenta
{
  const ORIGEN_BANELCO ='1';
  const ORIGEN_LINK = '2';
  const ORIGEN_CAJA = '3';
  const ORIGEN_SERVICIO = '4';
  protected $CBU;
  protected $balance;
  protected $ultimoMovimiento;

public function __construct($CBU)
  {
  $this->cbu = $CBU;
  }

  public function setCbu($CBU){
    $this->cbu = $CBU;
  }
  public function getCbu($CBU){
    return $this->$CBU;
  }
  public function setBalance($balance){
    $this->balance = $balance;
  }
  public function getBalance($balance){
    return $this->balance;
  }
  public function setUltimoMovimiento($ultimoMovimiento){
    $this->ultimoMovimiento = $ultimoMovimiento;
  }
  public function getUltimoMovimiento($ultimoMovimiento){
    return $this->$ultimoMovimiento;
  }
  }

public abstract function debitar($monto,$origen);

public function acreditar($monto){
$this->balance += $monto;
$this->actualizarFechaUltimoMovimiento();
}

public function actualizarFechaUltimoMovimiento(){
  $this->ultimoMovimiento = date('Y-m-d H:i:s');.
}

abstract function cobrarServicios();

}
 ?>
