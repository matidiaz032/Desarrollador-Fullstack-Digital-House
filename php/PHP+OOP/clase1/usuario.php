<?php
class Usuario {
  public $nombre;
  public $email;
  public $contraseña;
  public function __construct($nombreUsu, $emailUsu, $contraseñaUsu) {
    $this->nombre = $nombreUsu;
    $this->email = $emailUsu;
    $this->contraseña = $contraseñaUsu;
  }
}
  ?>
