<?php
require 'cliente.php';
class Multinacional extends cliente
{
  private $CUIT;
  private $razonSocial;

  function __construct($CUIT,$razonSocial,$email,$pass){
    parent::__construct($email,$pass);
    $this->CUIT = $CUIT;
    $this->razonSocial = $razonSocial;
  }
  public function setCUIT($CUIT){
   $this->CUIT = $CUIT;
  }
  public function getCUIT($CUIT){
  return $this->CUIT = $CUIT;
  }
  public function setsocial($razonSocial){
   $this->razonSocial = $razonSocial;
  }
  public function getsocial(){
  return $this->razonSocial = $razonSocial;
  }
  public function cobrarServicios(){
    /* if ($this->cuenta instanceof Classic) {
       $this->cuenta->debitar(100, Cuenta::ORIGEN_SERVICIO);
    }*/
    $monto = strlen($this->razonSocial)*5;
    $this->cuenta->cobrarServicios();
  }
}
 ?>
