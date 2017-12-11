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
<title>Informe</TITLE>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <style>
    	.fondo{
            background: url("img/Blue.jpg");
            height: 94.2vh;
            background-size: cover;
            background-position: center;
            background-attachment: none;
          }.color{
            background:#000000; 
          }.tabla {
            margin: 0;
          }
    </style>
<form style="margin-bottom: 0px">  
	<!--Barra-->
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">IMDA T&T</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="3 Menu principal.php">Inicio <span class="sr-only">(current)</span></a>
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


  <div class="row tabla">
    <div class="col-3-fluid bg-dark">
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


	<!--Formulario-->
<div class="fondo">

  <div class="container bg-dark border border-primary" style="padding-right: 20px; padding-left: 20px; margin-left: 350px;width: 840px;height: 500px; margin-right: 363px;margin-top: 150px;" >
    <h1 align="center" class="display-4 mt-5 mb-5 text-white">Informe</h1>
   
   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-legend col-sm-2 text-white mb-2">Estado del Reporte</legend>
      <div class="col-sm-10">
        <div class="form-check">
           <select class="form-control ">
                <option selected>Elija...</option>
                <option>Solucionado</option>
                <option>Pendiente</option>
                <option>En proceso</option>
        </select>
        </div>
      </div>
    </div>
         
          <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-legend col-sm-2 text-white">Calificacion</legend>
      <div class="col-sm-10">
        <div class="form-check">
           <select class="form-control ">
                <option selected>Elija...</option>
                <option>Muy buena</option>
                <option>Buena</option>
                <option>Regular</option>
                <option>Mala</option>
                <option>Muy Mala</option>
        </select>
        </div>
      </div>
    </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label text-white mt-3">Breve Resumen</label>
    <div class="col-sm-10">
    <textarea class="form-control mt-3" rows="3"></textarea> 
    </div>
  </div>
  <div class="form-group row">
    <div align="center"  class="col-sm-10">
      <a class="nav-link" href="Historial de incidencias.php"><button type="button" class="btn btn-primary" style="width: 176px;margin-left: 140px">Enviar</button></a>
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