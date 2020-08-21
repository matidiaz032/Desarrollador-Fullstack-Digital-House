function mostrar() {
    document.getElementById("imagen").style.display="block";
};

function ocultar() {
    document.getElementById("imagen").style.display="none";
};

//Selectores
window.onload=function(){
    //1.
    document.getElementById("titular").style.display='none';
    //2.
    document.querySelector(".image.fit").style.filter="grayscale(100%)";
    //3.
    document.querySelectorAll("input").forEach(
        function(element){
            element.style.background = "red";
        });
//DOM - Selectores y Atributos 
   var copy = document.getElementById("copyright");
   console.log(copy);

   var twitter = document.querySelector(".fa-twitter");
   var twitterEnlace = twitter.getAttribute('href');
   console.log(twitterEnlace);

   var facebook = document.querySelector(".fa-facebook");
   var facebookEnlace = facebook.getAttribute('href');
   console.log(facebookEnlace);

   var youtube = document.querySelector(".fa-youtube");
   youtube.setAttribute('href','https://www.youtube.com/channel/UCKkPOtW8gQPgIUaxF4Og7PA');
   console.log(youtube);

   var actions = document.querySelector(".formulario");
   var existeAction = actions.hasAttribute('action');
   console.log(actions);
   console.log(existeAction);
   actions.removeAttribute('url');
   actions.setAttribute('action',"http://www.digitalhouse.com");

   var article = document.getElementById('contacto');
   article.querySelector('h2').style.color='red';

   document.querySelectorAll('.icon').forEach(
       function (element) {
           element.style.background = "lime";
       }
   );

//Elementos
// 1-
   var nuevoBoton = document.createElement('input');
   var textoBoton = document.createTextNode('Aparecer');
   nuevoBoton.append(textoBoton);
   console.log(nuevoBoton);
   var botones = document.querySelector('.abc');
   botones.append(nuevoBoton);
   nuevoBoton.setAttribute('class',"button big scrolly");
   nuevoBoton.setAttribute('value','Aparecer');
   nuevoBoton.setAttribute('type','button');
   nuevoBoton.setAttribute('onclick',"mostrar()");
   var abracadabra = document.getElementById('abracadabra');
   console.log(abracadabra);

// 2-
   document.getElementById("top").textContent = "Parte Superior";
   document.getElementById("work").textContent = "Trabajo";
   document.getElementById("portfolio").textContent = "Portafolio";
   document.getElementById("work").textContent = "Trabajo";
   document.getElementById("contact").textContent = "Contacto";

// 3-
   var caja1 = document.getElementById("caja1");
   caja1.innerHTML = "<a href=# class='image featured'><img src='images/fondo.jpg' width='303px' height='212px'></a><h3><a href=#>Noche Estrellada</a></h3><p>Imagen de internet</p>";
   console.log(caja1);

// 4-
   var social = document.querySelector(".social");
   var foursquare = document.getElementById("chau");
   console.log(foursquare);
   social.removeChild(foursquare);

}