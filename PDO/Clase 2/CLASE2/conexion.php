<?php
function conectarse(){
  $dsn='mysql:host=localhost;dbname=movies_db;port=3306;charset=utf8';
  $db_username='root';
  $db_password='';
try{
  $db = new PDO($dsn, $db_username, $db_password);
  return $db;
}
catch(PDOException $Exception) {
  echo $Exception->getMessage();
  }
}

 ?>
