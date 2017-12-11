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
<title>Historial</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
			<style>
				.fondo{
            background: url("img/Blue.jpg");
            height: 92.5vh;
            background-size: cover;
            background-position: center;
            background-attachment: none;
          }.negro{
          	background: #000000;
          }
			</style>
<form style="margin-bottom: 0px;">

<!--Barra-->
   <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">IMDA T&T</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label=    "Toggle navigation">
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
<!--Barra Lateral-->

<div class="row" style="margin-right: 0px;height: 894px;">
    <div class="col-3-fluid bg-dark">
      <img class="mx-auto d-block fluid" src="img/User.png" alt="Second slide"  style="width: 350px">
        <div class="container p-3 mb-2 negro text-white mt-5">
            <label class="font-weight-light h4">Nombre</label><br>
            <label class="font-weight-light h6">Steven Santiago Avila Garcia</label><br>
            <label class="font-weight-light h4">Documento</label><br>
            <label class="font-weight-light h6">1003654987</label><br>
            <label class="font-weight-light h4">Correo</label><br>
            <label class="font-weight-light h6">Ejemplo@ejemplo.com.co</label><br>
            <label class="font-weight-light h4">Direccion</label><br>
            <label class="font-weight-light h6">Cll 00 #00 S</label>
        </div>
    </div>


 <!--Formularioooooo-->
 	<div class="fondo" style="height: 894px;width: 1568px;">
		<div class="container bg-dark border border-primary" style="margin-top: 200px; width: 950px;height: 400px;" >
			<div>
				<h1 align="center" class="display-4 mb-5 mt-5 text-white"> Historial de Incidencias</h1>
			</div>
			 	<div class="form-group row">
    				<label for="colFormLabel" class="col-sm-2 col-form-label text-white">Incidencia 20 Mayo</label>
    					<div class="col-sm-10">
      						<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
    					</div>

  				</div>

  				<div class="form-group row">
    				<label for="colFormLabel" class="col-sm-2 col-form-label text-white">Incidencia 4 Abril</label>
    					<div class="col-sm-10">
      						<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
    					</div>
  				</div>
  				<div class="form-group row mb-5">
    				<label for="colFormLabel" class="col-sm-2 col-form-label text-white">Incidencia 2 Junio</label>
    					<div class="col-sm-10">
      						<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
    					</div>
  				</div>
		</div>

	</div>
</form>
</body>
</html>
<?php 
} 
?>