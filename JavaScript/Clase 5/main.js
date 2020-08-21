window.onload = function() {
// Eventos
//2-    
    var boton1 = document.getElementById('saludo');
    boton1.onclick = function(){
        alert("Hola");
    }
//3-
    var boton2 = document.getElementById('fondo');
    boton2.onclick = function(){
        document.body.style.background="lime";
    }
//4-
    var imagen1 = document.getElementById('img1');
    imagen1.onmouseover = function(){
        console.log("Estoy viendo la imagen");
        this.onmousemove = function (evento) {
            console.log('X:' + evento.clientX);
            console.log('Y:' + evento.clientY);
        }
    }
//5-
    var imagen2 = document.getElementById('img2');
    imagen2.addEventListener("click",function(){
        console.log("Estoy cliqueando la imagen");
    });
//6-
    var cambio = document.body;
    function estilo(){
        cambio.style.background='#FB2037';
        }
    cambio.addEventListener('click',estilo());
//7-
    cambio.removeEventListener('click',estilo());
//8-
    var botonEnvio = document.getElementById('boton');
    var mandar = document.getElementById('mandar'); 
    botonEnvio.onclick = function() {
        alert("No se puede realizar este envio");
        mandar.removeAttribute('action');
    }
//Timers 
//1-
   var contador = this.setTimeout(function(){alert('Tiempo!');}, 10000)
//2-
   var contador2 = this.setTimeout(function(){alert('Intervalo');}, 5000)              
}
