//Rompe Hielo
var suma = 5+4;
var nombre='pepe';
var edad=30;
console.log("Hola");
console.log(1+3);

//Operadores
var num1=2;
   var num2=7;
num1++;
var resultado= num1*num2;

if(2 == "2"){

    console.log("Estas igual!!!");
    
    }

function entreDiez(num)
{
    if((num > 0) && (num < 10)){
        console.log(true);
    } else {
        console.log(false);
    }
} 
6- //el resultado tiene que dar 14, entonces se le agrega parentesis.
 2 * (2 + 5);

 //Condicionales & Bucles
var num1 = "123";
var num1 = 123;
var num2 = "234";
var num2 = 234;
var suma = num1 + num2;

if (1) {

    alert('ALERT');

}

var recibiTexto = function(texto) {
    if(texto === ''){
        return true;
    } else {
        return false;
    }
}

var num3 = 3;
var num4 = 4;
if (num4 > num3){
   console.log("El numero mayor es " + num4); 
} 
else{
    console.log('El numero mayor es ' + num3);
}

console.log("El numero mayor es " + (num3 > num4 ? num3 : num4));

//Vamos a diseñar un juego para jugar con amigos.
//En cada turno habrá que ejecutar nuestro programa y hará lo siguiente:
//Para generar un número al azar entero se utiliza: Math.floor(Math.random()*11)
// a. Elegirá un número entero al azar entre 1 y 10.
// b. Según el número dirá una consigna para el jugador que le toque jugar
// (ejemplo: Cantar una canción, Dar una vuelta carnero, etc).
// Importante: ​Se recomienda resolver el ejercicio utilizando un switch.

switch (Math.floor(Math.random()*11)) {
    case 1:
        console.log("Dar una vuelta carnero");
        break;
    case 2:
        console.log("Caminar hacia atras");
        break;
    case 3:
        console.log("Caminar 10 pasos");
        break;
    case 4:
        console.log("Correr una vuelta");
        break;
    case 5:
        console.log("Contar hasta 100");
        break;
    case 6:
        console.log("Quedarse quieto 2 minutos");
        break; 
    case 7:
        console.log("Inventar una palabra");
        break;
    case 8:
        console.log("Gritar fuerte");
        break;
    case 9:
        console.log("Cantar una cancion");
        break;
    case 10:
        console.log("Bailar");
        break;                               
    default:
        console.log("Pasa al turno siguiente");
        break;
}

var oveja = 1;
 console.log( oveja + " ovejita");
do {
    console.log( ++oveja + " ovejitas");
}while (oveja < 1000); 

 console.log( oveja + " ovejita");

 do {
    console.log( ++oveja + " ovejitas");
    if (oveja === 10) {
        console.log("se quedo dormido");
        break;
    }
}while (oveja < 1000); 

 function numerosPares(numero) {
    do {
        if (numero % 2 == 0) {
           console.log(numero); 
        }
        numero++;
    } while(numero <= 100);
} 

numerosPares(0);








