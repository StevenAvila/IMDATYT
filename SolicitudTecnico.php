<?php 
session_start();
if(empty($_SESSION['Incorreo']))
{
  header('location:index.php');
}
else
{
?>
<html> 
<head> 
<title>Registrar Incidencia</TITLE>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head> 
<style >
  .fondo{
            background: url("img/Blue.jpg");
            height: 94.2    vh;
            background-size: cover;
            background-position: center;
            background-attachment: none;
          }
          .tabla
          {
            margin: 0;
          }
          .cuadro{
            margin-bottom: 0px;
          }.color
          {
            background: #000000;
          }
          .margen{
            margin-bottom: 54px;
          }
</style>
<body> 
<form class="cuadro">
<!-- Barra Navegacion -->

      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
        <a class="navbar-brand text-white">IMDA T&T</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label=    "Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
        </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="nav-link" href="3 Menu Principal.php">Inicio <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="6 Historial de incidencias.php">Historial incidencias</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:1450px ">
          Opciones
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 1380px">
            <a class="dropdown-item" href="#">Configurar Cuenta</a>
            <a class="dropdown-item" href="index.php">Cerrar Sesion</a>
          </div>
      </li>
    </ul>
  </div>
</nav>

<!-- Datos Izquierda -->	
<div class="fondo" style="height: 893px;">
  <div class="row tabla">
    <div class="col-3-fluid bg-dark" style="height: 893px;">
      <img class="mx-auto d-block fluid" src="img/User.png" alt="Second slide"  style="width: 350px">
        <div class="container p-3 mb-2 color text-white mt-5">
            <label class="font-weight-light h4">Nombre</label><br>
            <label class="font-weight-light h6">Steven Santiago Avila Garcia</label><br>
            <label class="font-weight-light h4">Documento</label><br>
            <label class="font-weight-light h6">1003654987</label><br>
            <label class="font-weight-light h4">Correo</label><br>
            <label class="font-weight-light h6">Ejemplo@ejemplo.com.co</label><br>
            <label class="font-weight-light h4">Direccion</label><br>
            <label class="font-weight-light h6">Cll 00 #00 S</label>
            <button class=""></button>
        </div>
    </div>

<!-- Imagenes Movedizas-->
  
      <div class="col-9">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="mx-auto d-block" src="img/hardware.png" alt="First slide"  style="width: 450px"  >
      <div class="carousel-caption d-none d-md-block">
    <h3>Hardware</h3>
    <p>Todo lo fisico de su computador</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block" src="img/software.png" alt="Second slide"  style="width: 450px">
      <div class="carousel-caption d-none d-md-block">
    <h3>Software</h3>
    <p>Todo lo que tenga que ver con el sistema operativo</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block" src="img/audiovisuales.png" alt="Third slide" style="width: 450px" >
      <div class="carousel-caption d-none d-md-block">
    <h3>Audiovisuales</h3>
    <p>Todo en cuanto electrodomesticos refiere</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<!-- Formulario-->

<div class="container col-8 bg-dark border border-primary" style="height: 407px; margin-left: 280spx;">
  
<form>
  <div class="ml-5 mr-5 mt-5 margen">
  <div class="form-group ">
    <label class="text-white">Tecnicos Disponibles</label>
    <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Elija un tecnico..</option>
                <option>Jhonnatan Rodriguez</option>
                <option>Luis Lucero</option>
                <option>Jhon Calvo Marcos</option>
        </select>
  </div>
  <div class="form-group">
    <label class="text-white">Tipo de incidencia</label>
        <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Elija una opcion..</option>
                <option>Harware</option>
                <option>Software</option>
                <option>Audiovisuales</option>
        </select>
  </div>
  <div class="form-group text-white">
    
     <label for="exampleFormControlTextarea1">Realice una breve descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group ">
    
    <input type="file" name="archivo" value="archivo" size="80">
    <a href="5 Informe.php" class="btn btn-primary btn-sm btn-lg active" role="button" aria-pressed="true" style="margin-left: 300px">Generar Incidencia</a>
  </div>
  </div>
</form>
</span>  
</div>
</div>
  </div>

</div>
</div>
</div>
</div>
</div>
</form>
		 

		  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    	<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php 
} 
?>