<?php 
//session_start();
//if(empty($_SESSION['Incorreo']))
//{
  //header('location:index.php');
//}
//else
//{
//?>

<!DOCTYPE html>
<html>
<head>
    <title> Menu Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<style>
	.fondo{
			     background: url("img/cables.jpg");
            height: 625px;
            background-size: cover;
            background-position: center;
            
	}
  .bordes{
            background:  #27272B;
            width: 420px;
            height: 810px;
            border: 2px solid #4872B2;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            box-shadow: inset 0 0 20px #4872B2;
            position: absolute;
            top:  100px;
            left: 45px; 
            right: 150px;
            font-family: Century
          }
         
</style>
<body>





<!-- BARRA DE NAVEGACION -->

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top ">
  <a class="navbar-brand text-white" >IMDA T&T</a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="4 Solicitud tecnico y reporte de incidencia.php">Nueva Incidencia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="6 Historial de incidencias.php">Historial incidencias</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 1360px"  >
          Opciones
        </a>
        <div class="dropdown-menu d-flex-p-2" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 1300px">
         <a class="dropdown-item" href="#"> </a>
          <a class="dropdown-item" href="#">Configurar cuenta</a>
          <a class="dropdown-item" href="index.php">Cerrar Sesion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- imagen principal -->
<div class="bg-secondary">
<div class="fondo"></div>
<div class="jumbotron jumbotron-fluid bg-dark text-white">
  <div class="container">
    <h1 class="display-3">Soporte </h1>
    <p class="lead">Aqui tendras contacto con los tecnicos de tu empresa y tener una pronta solucion</p>
  </div>
</div>
  <!-- Content here -->

<div class="container">
  <div class="row">
    <div>
      <p class="p-3 mb-2 bg-dark text-white p-4 w-25 float-left mr-5"> En la sección de Especiales incorporamos interesantes estudios biográficos que debemos a la pluma de nuestros colaboradores. Por el momento pueden consultarse notables ensayos sobre el gran cantante mexicano Juan Manuel Guerrero, el poeta chileno José Grimaldi, el coronel y estadista uruguayo Lorenzo Latorre, el científico argentino Julián L. Acosta y el creador del escudo salvadoreño, Rafael Barraza, así como una sección especial dedicada a figuras destacadas de la historia de la educación, a cargo del historiador Antonio Gascón.</p>
      <p class="p-3 ">
        Semblanzas de Actores
Nos enorgullece presentar Biografías de actores, la nueva sección que debemos a la inestimable colaboración de la periodista en medios audiovisuales y experta cinéfila Analia De Masi. Una excelente serie de semblanzas de actores y actrices del cine clásico internacional y argentino que esperamos que siga creciendo en el futuro.

Boletín de Novedades
Ahora puedes Subscribirte al Boletín de Novedades y recibir periódicamente en tu correo noticias sobre los nuevos contenidos publicados en nuestro sitio; sólo necesitarás facilitarnos una dirección de correo válida, que se utilizará exclusivamente para enviar el boletín de novedades. Para ver los que ya han sido enviados, visita el Archivo de Boletines.

Noticias y Efemérides
 25 DE NOVIEMBRE DE 2016
Fallece el revolucionario y estadista cubano Fidel Castro.

 09 DE NOVIEMBRE DE 2016
El magnate republicano Donald Trump es elegido presidente de los Estados Unidos.
      </p>
    </div>
  </div>
</div>
</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html><!--<?php--> 
//} 

//?>