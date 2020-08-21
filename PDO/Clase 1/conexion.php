<?php
function iniciarconexion(){
  $dsn = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
  $db_user ='root';
  $db_pass ='';
  $db = new PDO ($dsn, $db_user, $db_pass);
  try {
    $db = new PDO ($dsn, $db_user, $db_pass);
    return $db;
  } catch (\PDOException $exception) {
    echo $exception->getMessage();
  }
}
 ?>
