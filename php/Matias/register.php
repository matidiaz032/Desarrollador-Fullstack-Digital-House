<?php
$nombre="";
$mail="";
$usuario="";
$errores=[];
$paises=['Argentina','Brasil','Chile','Colombia','Estados Unidos','España','Inglaterra','Francia','Portugal','Japon']
?>
<?php
if ($_POST) {
    if (!$_POST["name"]) {
    $errores["name"] = "El campo no puede ser vacio";
  } else if (strlen($_POST["name"]) < 3 || strlen($_POST["name"]) > 15) {
    $errores["name"]="El campo debe tener entre 3 y 15 letras";
  } else {
    $nombre= $_POST["name"];
  }
}
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false)  {
    $errores["email"] = "El formato de mail no es correcto";
  } else if (!$_POST["email"]) {
    $errores["email"] = "El campo no puede estar vacio";
  }


    if (strlen($_POST["username"]) < 8) {
        $errores["username"]= "El nombre de usuario debe tener al menos 8 caracteres <br>";
   }
   if (strlen($_POST["password"]) < 6) {
       $errores["password"] = "La contraseña debe tener al menos 6 caracteres <br>";
   }

   if($_POST["password"]!==$_POST["confirm"]) {
    $errores["confirm"] = "Las contraseñas no coinciden <br>";
   }

   if (count($errores)== 0) {
    header("Location:felicitaciones.html");
    exit;
   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='register.php' method='POST'>
            <fieldset >
                <legend>Registrate</legend>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?=isset($_POST)?$_POST["name"]:""?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'> <?= isset($errores["name"])?$errores["name"]:""?> </span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?=isset($_POST)?$_POST["email"]:""?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'> <?= isset($errores["email"])?$errores["email"]:""?> </span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario:</label><br/>
                    <input type='text' name='username' id='username' value='<?=isset($_POST)?$_POST["username"]:""?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'> <?= isset($errores["username"])?$errores["username"]:""?> </span>
                </div>
                <div class='container' style='height:60px;'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'> <?= isset($errores["password"])?$errores["password"]:""?> </div>
                </div>
                <?php if (! isset($_POST["versionCorta"])):?>
                <div class='container' style='height:60px;'>
                    <label for='confirm' >Confirmar Contraseña*:</label><br/>
                    <div class='confirm' id='confirm' ></div>
                    <input type='password' name='confirm' id='confirm' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'> <?= isset($errores["confirm"])?$errores["confirm"]:""?> </div>
                </div>
              <?php endif ?>
              <label for="Nacionalidad">Indique su Nacionalidad</label>
              <select name="Paises">
                <?php foreach ($paises as $posicion => $nacionalidad): ?>
                  <option value="<?= $posicion ?>"><?=$nacionalidad ?></option>
                <?php endforeach; ?>
              </select>
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
