//Funciones
//Definir una función que reciba dos números y retorne el primer número elevado a la potencia del segundo. 
var miFuncion = function(n1,n2)
{
    console.log(n1 ** n2)
}
miFuncion(5,3);

var cuadrado = function(n3)
{
    console.log(n3 ** n3); 
}
cuadrado(4);

var trianguloRectangulo = function(a,b)
{
    function hipotenusa()
    {
        return Math.sqrt(a**2 + b**2);  
    }
    console.log(hipotenusa() + a + b);
}
trianguloRectangulo(4,5);

/* function miSandwich(ingr1, ingr2, callback)
{
    console.log("Estoy comiendo un sandwich de: " + ingr1 + " & " + ingr2);
    setTimeout(function callback()
    {
        console.log("Termine de comer mi sandwich");
    }, 3000);
}

miSandwich('jamon', 'queso', setTimeout(function callback() {
        console.log('Termine de comer mi sandwich')
       }, 3000)); */

function miSandwich(ingr1, ingr2, callback)
{
    console.log("Estoy comiendo un sandwich de: " + ingr1 + " & " + ingr2);
    callback();
};

function call()
{
    setTimeout(function()
    {
        console.log("Termine de comer mi sandwich");
    },3000);
}
miSandwich('Jamon', 'Queso', call);

//Arrays
const numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
numeros.forEach(function(numeros)
{
 var resto = numeros % 7;
 if (resto == 0)
 {
   console.log(numeros + " Es multiplo de 7");  
 }   
});

numeros.map(function(numeros){
    console.log(Math.sqrt(numeros));
});

//Un detective recibió un código anónimo cuyo mensaje quiere descifrar. 
//Acudió a vos por ayuda; las únicas pistas que recibió fueron: filter y typeof. ¿Podrás ayudarlo?

var enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];

//Con toda esta información el detective logró averiguar la dirección de una calle, sólo que no encuentra la altura.
//Lo único para descifrar que encontró fué una leyenda que dice: 
//“Sumar todos los números del enigma planteado para encontrar la altura”. 
//Encontró una pista que decía reduce.
enigma.filter(function (elemento) {
    if (typeof(elemento) == "string") {
        console.log(elemento);
    }
})
//Enigma: "La perseverancia es la clave".

 var arrayNumeros = enigma.filter(function(elemento) {
    if (typeof(elemento) == "number") {
        return elemento;
    }
})
var numCalle = arrayNumeros.reduce(function (total,numero) {
    return total + numero;
})

console.log(numCalle);
//Numero de la Calle: 215.

var persona = {
    edad: 22,
    nombre: 'Matias',
    apellido: 'Diaz',
    sexo: 'Masculino',
    estadoCivil: 'Soltero',
    peliculasFavoritas: [
        {
        pelicula: 'Hombres de Negro',
        genero: 'Ciencia Ficcion',
        año: '1997',
        },
        {
        pelicula: 'Toy Story',
        genero: 'Animacion',
        año: '1995',
        }
    ],
    estatura: 1.62,
    saludo: function(nombre,apellido) {
        console.log(this.nombre + " " + this.apellido);
    },
    comer: function (comida) {
       console.log("Estoy comiendo " + comida); 
    }
}
 console.log(persona.saludo());
 console.log(persona.comer("Fideos"));




