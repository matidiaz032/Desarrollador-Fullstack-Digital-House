<?php

//Defino variables privadas para la clase Cliente

Class Cliente{
  Private $email;
  Private $pass;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email,$pass){
    $this->email = $email;
    $this->pass = $pass;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  }

class Persona extends cliente
{
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  public function __construct($nombre,$apellido,$documento,$nacimiento){
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
}

class PYME extends cliente
{
private $CUIT
private $razonsocial

function __construct($CUIT,$razonsocial){
  $this->CUIT = $CUIT;
  $this->razonsocial = $razonsocial;
}
public function setCUIT($CUIT){
 $this->CUIT = $CUIT;
}
public function getCUIT($CUIT){
return $this->CUIT = $CUIT;
}
public function setsocial($razonsocial){
 $this->razonsocial = $razonsocial;
}
public function getsocial($razonsocial){
return $this->razonsocial = $razonsocial;
}
}

class Multinacional extends cliente
{
  private $CUIT
  private $razonsocial

  function __construct($CUIT,$razonSocial){
    $this->CUIT = $CUIT;
    $this->razonsocial = $razonsocial;
  }
  public function setCUIT($CUIT){
   $this->CUIT = $CUIT;
  }
  public function getCUIT($CUIT){
  return $this->CUIT = $CUIT;
  }
  public function setsocial($razonsocial){
   $this->razonsocial = $razonsocial;
  }
  public function getsocial(){
  return $this->razonsocial = $razonsocial;
  }
}

/**
 *
 */
class Cuenta
{
  protected $CBU
  protected $balance
  protected $fechaultimomovimiento

const CAJERO_BANELCO ='1';
const CAJERO_LINK = '2';
const CAJA = '3';

  function __construct($CBU,$balance,$fechaultimomovimiento)
  {
  $this->CBU = $CBU;
  }
}

abstract public function debitar($monto,$cajero){

}

public function acreditar($monto){

}


class Classic extends Cuenta
{
  public function debitar($monto,$cajero)
  {
    switch ($monto) {
      case 'CAJERO_BANELCO':
      $this->monto+=$monto *0.05;
        break;
      case 'variable':
      $this->monto
  break;
      default:
        // code...
        break;
    }
  }
}

 class Gold extends Cuenta
 {
   public function debitar($monto,$cajero)
   {
     // code...
   }
 }


 class Platinum extends Cuenta
 {
   public function debitar($monto,$cajero)
   {
     switch (variable) {
       case 'value':
         $this->balance=$monto;
         break;

       default:
         // code...
         break;
     }
   }

 }


 class Black extends Cuenta
 {
   public function debitar($monto,$cajero)
   {
     // code...
   }
 }
