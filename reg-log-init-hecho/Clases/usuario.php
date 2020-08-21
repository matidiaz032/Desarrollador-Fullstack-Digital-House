<?php



class Usuario {
  private $id;
  private $email;
  private $password;
  private $edad;
  private $username;
  private $pais;
  private $telefono;

  public function __construct($email, $password, $edad, $username, $pais, $telefono){
    $this->email = $email;
    $this->setPassword($password);
    $this->edad = $edad;
    $this->username = $username;
    $this->pais = $pais;
    $this->telefono = $telefono;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
  $this->id = $id;
  }
  public function getEMail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
  $this->email = $email;
  }
  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
  $this->password =password_hash($password, PASSWORD_DEFAULT);
  }
  public function getEdad()
  {
    return $this->edad;
  }

  public function setEdad($edad)
  {
  $this->edad = $edad;
  }
  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
  $this->username = $username;
  }
  public function getPais()
  {
    return $this->pais;
  }

  public function setPais($pais)
  {
  $this->pais = $pais;
  }
  public function getTelefono()
  {
    return $this->telefono;
  }

  public function setTelefono($telefono)
  {
  $this->telefono = $telefono;
  }
  public function guardarImagen(){
    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
    {

      $nombre=$_FILES["avatar"]["name"];
      $archivo=$_FILES["avatar"]["tmp_name"];

      $ext = pathinfo($nombre, PATHINFO_EXTENSION);

      if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
        return "Error";
      }

      $miArchivo = dirname(__FILE__);
      $miArchivo = $miArchivo . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR;
      $miArchivo = $miArchivo . $this->getEmail() . "." . $ext;

      move_uploaded_file($archivo, $miArchivo);
    }
  }
}
