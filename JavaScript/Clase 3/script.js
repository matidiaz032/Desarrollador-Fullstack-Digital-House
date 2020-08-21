//a.
 console.log(5+4);
//b
console.log("Hola");
//c
var manzanas = 100;
console.log(manzanas);

//2-
console.log("esto es un archivo externo");

//3-4
window.onload = function() {
    alert("Bienvenido " + nombre);
  };
 
//5-
var nombre=prompt("Ingrese su nombre");

//6-
var mayor=confirm("¿Es mayor de 18 años?");
        if (mayor==false) {
            location='http://google.com';
        }

//7-
console.log("La URL actual es: " + location.href);

//8-
var botonA = document.getElementById(1);
botonA.onclick = function() {
    history.back();
}
var botonB = document.getElementById(2);
botonB.onclick = function() {
    history.forward();
}

//9-
var numero1=prompt("Ingrese un numero","");
var numero2=prompt("Ingrese otro numero","");
var seguro=confirm("¿Esta seguro de los numeros ingresados?");
if (seguro==false) {
    history.go();
}
    if (numero1>numero2) {
        alert("El numero mas grande es: " + numero1);
    } else {
        alert("El numero mas grande es: " + numero2);
    }

