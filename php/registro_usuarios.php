<?php $paises=['Argentina','Brasil','Chile','Colombia','Estados Unidos','España','Inglaterra','Francia','Portugal','Japon'] ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="confirmacion.php" method="POST">
      <fieldset >
          <legend>Registrate</legend>

          <input type='hidden' name='submitted' id='submitted' value='1'/>

          <div><span class='error'></span></div>
          <div class='container'>
              <label for='name' >Nombre completo: </label><br/>
              <input type='text' name='name' id='name' value="<?=isset($_POST)?$_POST["name"]:""?>" maxlength="50" /><br/>
              <span id='register_name_errorloc' class='error'></span>
          </div>
          <div class='container'>
              <label for='edad' >Edad: </label><br/>
              <input type='number' name='edad' id='edad' value='<?=isset($_POST)?$_POST["edad"]:""?>' maxlength="50" /><br/>
              <span id='register_name_errorloc' class='error'></span>
          </div>
          <div class='container'>
              <label for='genero' >Genero: </label><br/>
              <input type="radio" name="genero" value="m">Masculino<br>
              <input type="radio" name="genero" value="f">Femenino<br>
              <input type="radio" name="genero" value="o">Otro<br>
          </div>
          <div class='container'>
              <label for='email' >Email:</label><br/>
              <input type='text' name='email' id='email' value='<?=isset($_POST)?$_POST["email"]:""?>' maxlength="50" /><br/>
              <span id='register_email_errorloc' class='error'></span>
          </div>
          <div class='container'>
              <label for='username' >Nombre de usuario*:</label><br/>
              <input type='text' name='username' id='username' value='<?=isset($_POST)?$_POST["username"]:""?>' maxlength="50" /><br/>
              <span id='register_username_errorloc' class='error'></span>
          </div>
          <div class='container' style='height:50px;'>
              <label for='password' >Contraseña*:</label><br/>
              <div class='pwdwidgetdiv' id='thepwddiv' ></div>
              <input type='password' name='password' id='password' maxlength="50" />
              <div id='register_password_errorloc' class='error' style='clear:both'></div>
          </div>
          <?php if (! isset($_POST["versionCorta"])):?>
          <div class='container' style='height:80px;'>
              <label for='confirm' >Confirmar Contraseña*:</label><br/>
              <div class='confirm' id='confirm' ></div>
              <input type='password' name='confirm' id='confirm' maxlength="50" />
              <div id='register_password_errorloc' class='error' style='clear:both'></div>
          </div>
        <?php endif ?>
        <label for="hobbys[]">¿Qué hobbies tenés?</label><br>
        <input type="checkbox" name="hobbys[]" value="Futbol"> Futbol<br>
        <input type="checkbox" name="hobbys[]" value="Netflix"> Netflix<br>
        <input type="checkbox" name="hobbys[]" value="Helado"> Helado<br>
        <label for="Nacionalidad">Indique su Nacionalidad</label>
        <select name="Paises">
          <?php foreach ($paises as $posicion => $nacionalidad): ?>
            <option value="<?= $posicion ?>"><?=$nacionalidad ?></option>
          <?php endforeach; ?>
        </select>
          <div class='container'>
              <input type='submit' name='Submit' value='Enviar' />
          </div>

      </fieldset
    </form>
  </body>
</html>
