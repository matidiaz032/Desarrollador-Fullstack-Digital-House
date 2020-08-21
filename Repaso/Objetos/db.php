<?php
require_once ("usuario.php");

  Abstract Class DB {
  
  public abstract function traerTodos();
  public abstract function traerPorMail($email);
  public abstract function guardarUsuario($usuario);
  }

 ?>
