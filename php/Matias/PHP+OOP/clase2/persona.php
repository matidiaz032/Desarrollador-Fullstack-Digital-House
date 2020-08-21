<?php
require 'cliente.php';
class Persona extends cliente
{
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  public function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass){
    parent::__construct($email,$pass);
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre($nombre){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido($apellido){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento($documento){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento($nacimiento){
    return $this->nacimiento;
  }
  public function cobrarServicios(){
    /* if ($this->cuenta instanceof Classic) {
       $this->cuenta->debitar(100, Cuenta::ORIGEN_SERVICIO);
    }*/
    $monto = strlen($this->$apellido)*10;
    $this->cuenta->cobrarServicios($monto);
  }
}
 ?>
