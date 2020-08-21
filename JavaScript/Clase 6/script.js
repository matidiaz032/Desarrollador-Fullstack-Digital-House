window.onload = function() {
//1-    
    var miFormulario = document.forms[0];
//2-    
    var campoEmail = miFormulario.querySelector('.email');
    campoEmail.onblur = function() {
        if (this.value == '') {
            alert('El campo email no puede estar vacio');
        }else if(!emailRegex.test(this.value)) {
            alert('El campo email tiene un formato incorrecto');
        }
    }
    
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    
    var campoPass = miFormulario.querySelector('.password');
    campoPass.onblur = function() {
        if (this.value == '') {
            alert('El campo contraseña no puede estar vacio');
        }
    }

    miFormulario.onsubmit = function() {
        if (campoEmail.value == '') {
            alert('El campo email es obigatorio');
            event.preventDefault();  
    } else if (campoPass.value == '') {
        alert('El campo contraseña es obligatorio');
    } else if (contraConfirm.value !== campoPass.value) {
        alert('Las contraseñas no coinciden');
    }
  }
  
   var contraConfirm = miFormulario.querySelector('.passwordConfirm');
   contraConfirm.onblur = function() {
    if (this.value == '') {
        alert('El campo contraseña no puede estar vacio');
    }
  }

   var nombre = "";
   var apellido = "";
}
