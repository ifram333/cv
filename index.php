<?php
header('Content-Type: text/html; charset=UTF-8');
include("/database/config.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ivan F. Ramirez Sanclemente</title>
    <meta name="description" content="Hoja de vida de Ivan Fernando Ramirez Sanclemente - Curriculum Vitae de Ivan Ramirez"/>
  	<meta name="keywords" content="cv, ivan, ramirez, ivan ramirez, curriculum, vitae, hv, hoja de vida, hoja, vida"/>
  	<meta name="author" content="Ivan Fernando Ramirez Sanclemente"/>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/loader.css">
    <link rel="stylesheet" href="stylesheets/main.css">
  </head>
  <body>

    <!-- Loader -->
    <div class="loader">
      <div class="coffee"></div>
    </div>

    <!-- NavBar -->
    <div class="navbar-fixed">
      <nav class="z-depth-0">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile-sidenav" class="sidenav-trigger show-on-small"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#main"><i class="fa fa-coffee"></i>Inicio</a></li>
            <li><a href="#about"><i class="fa fa-address-card"></i>Acerca de mí</a></li>
            <!-- <li><a href="#portfolio"><i class="fa fa-folder-open"></i>Portafolio</a></li> -->
            <li><a href="#contact"><i class="fa fa-inbox"></i>Contáctame</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <ul class="sidenav" id="mobile-sidenav">
      <li><a class="sidenav-close" href="#main"><i class="fa fa-coffee"></i>Inicio</a></li>
      <li><a class="sidenav-close" href="#about"><i class="fa fa-address-card"></i>Acerca de mí</a></li>
      <!-- <li><a class="sidenav-close" href="#portfolio"><i class="fa fa-folder-open"></i>Portafolio</a></li> -->
      <li><a class="sidenav-close" href="#contact"><i class="fa fa-inbox"></i>Contáctame</a></li>
    </ul>

    <a href="file/ivan_ramirez.pdf" class="waves-effect waves-light btn-download" download="Iván Ramírez.PDF"><i class="fa fa-download"></i>MI PERFIL</a>

    <!-- Main section -->
    <div  id="main" class="bgimg-1">
      <div class="display-mid">
        <span class="center-align text-padding">IVAN <span class="hide-on-small-only">FERNANDO </span>RAMIREZ <span class="hide-on-med-and-down">SANCLEMENTE</span></span>
      </div>
    </div>

    <!-- About Me section -->
    <div id="about" class="content container">
      <h3 class="center-align">ACERCA DE MÍ</h3>
      <p class="center-align"><em>Ingeniero de Sistemas y Ciencias de la Computación</em></p>
      <p>Soy un entusiasta de las nuevas tecnologías y los avances de la informática en todos los diferentes ámbitos que existe. Me encanta aprender de los mejores y aplicar sus enseñanzas en mi propia vida. Soy una persona abierta de mente a las criticas y consejos. Me esfuerzo para que mi trabajo sobrepase las espectativas, sin importar lo difícil que sea. Amo trabajar con metodologías ágiles y más aún, cuando estas son aplicadas correctamente desde el inicio de cualquier proyecto.<br>No me gusta el negativismo ni las excusas. De igual manera, no me gusta trabajar con la presión del tiempo, porque esto significa que se han estado haciendo mal las tareas desde un principio.</p>
      <div class="row">
        <div class="col m6 center-align my-photo">
          <p class="hide-on-med-and-down"><i class="material-icons">person</i><b>Iván Fernando Ramírez Sanclemente</b></p>
          <p class="hide-on-large-only"><i class="material-icons">person</i><b>Iván Ramírez Sanclemente</b></p>
          <img src="images/foto.jpg" alt="Una foto de mí">
        </div>
        <div class="col m6 hide-on-small-only my-info">
          <p>Soy un ingeniero de sistemas y ciencias de la computación de la ciudad de Cali, Colombia. Nacido en Buga y criado ahí hasta que cumplí los 16 años de edad, después viajé a Cali para estudiar mi carrera en la Pontificia Universidad Javeriana Cali, con el sueño de convertirme en el mejor ingeniero de sistemas.<br>Soy un amante de la música en casi todos sus generos, me gusta leer sobre ficción, misterio y biografías de las personas que considero ídolos, de igual manera, amo salir y viajar.</p>
        </div>
      </div>
      <p class="text-skill">Mis habilidades:</p>
      <div class="row skill">
        <!--Aquí se cargan las habilidades-->
      </div>
      <div class="btns center-align">
        <a class="waves-effect show-more-skill btn-skill grey lighten-2">MOSTRAR MÁS</a>
        <a class="waves-effect show-less-skill btn-skill grey lighten-2">MOSTRAR MENOS</a>
      </div>
    </div>

    <!-- Portfolio section -->
    <!-- <div class="bgimg-2">
      <div class="display-mid">
        <span>PORTAFOLIO</span>
      </div>
    </div>

    <div id="portfolio" class="content container">
      <h3 class="center-align">MI TRABAJO</h3>
      <p class="center-align"><em>Una muestra de los proyectos en los que he trabajado</em></p>

      <div class="row work">
        Aquí se cargan los trabajos
      </div>

    </div> -->

    <!-- Contact Me section -->
    <div class="bgimg-3">
      <div class="display-mid">
        <span>CONTÁCTAME</span>
      </div>
    </div>

    <div id="contact" class="content container">
      <h3 class="center-align">ESTOY AQUÍ</h3>
      <p class="center-align"><em>Mándame un mensaje</em></p>

      <div class="row">
        <div class="col s12 m6 l6">
          <div id="map"></div>
        </div>
        <div class="col s12 m6 l6">
          <div class="row information">
            <p class="col s12 m12 l12"><i class="material-icons">location_on</i>Cali, Colombia</p>
            <p class="col s12 m12 l12"><i class="material-icons">phone</i>(+57) 305 7365930</p>
          </div>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12 m12 l6 tooltip">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="name" type="text">
                  <label for="name">Nombre</label>
                  <span class="tooltiptext tooltip-name">Ingresa tu nombre</span>
                </div>
                <div class="input-field col s12 m12 l6 tooltip">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email">
                  <label for="email">Correo</label>
                  <span class="tooltiptext tooltip-email-blank">Ingresa tu correo</span>
                  <span class="tooltiptext tooltip-email-regexp">Correo inválido</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l12 tooltip">
                  <i class="material-icons prefix">message</i>
                  <textarea id="message" class="materialize-textarea" onpaste="return false;" data-length="360"></textarea>
                  <label for="message">Mensaje</label>
                  <span class="tooltiptext tooltip-message">No olvides el mensaje</span>
                </div>
              </div>
              <a class="waves-effect btn-send grey lighten-2 col s6 offset-s6 m8 offset-m4 l5 offset-l7"><i class="material-icons left">send</i>Enviar</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer section -->
    <footer class="center-align grey darken-3 ">
      <a href="#main" class="btn-go-top waves-effect grey lighten-4"><i class="material-icons">arrow_upward</i>SUBIR</a>
      <div class="section">
        <a href="https://www.linkedin.com/in/ifram333/" target="_blank" class="waves-effect btn-floating social"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/ifram333" target="_blank" class="waves-effect btn-floating social"><i class="fa fa-github"></i></a>
      </div>
    </footer>

    <!-- Google Maps script -->
    <script>
      var map;
      function initMap() {
        var yo = {lat:  3.376476, lng: -76.542118};

        map = new google.maps.Map(document.getElementById('map'), {
          scaleControl: true,
          disableDefaultUI: true,
          center: yo,
          zoom: 14
        });

        var infowindow = new google.maps.InfoWindow;
        infowindow.setContent('<b>Hola!!!</b>');

        var marker = new google.maps.Marker({map: map, position: yo});
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUsoB5r0EFcHn53_3Yk2E-eM7OJ-5muJs&callback=initMap" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="javascripts/main.js" charset="utf-8"></script>

  </body>
</html>
