<DOCTYPE html>

<html>
<head>
    <title>INGRESO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<style >
    
    .fondo{
              background: url("img/Blue.jpg");
              height: 94.2vh;
              background-size: cover;
              background-position: center;
    }
  .bordes{
            background:  #27272B;
            width: 420px;
            height: 500px;
            border: 2px solid #4872B2;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            box-shadow: inset 0 0 20px #4872B2;
            position: absolute;
            top:  210px;
            left:120px; 
            right: 150px;
            
  }
</style>
<!-- BARRA DE NAVEGACION -->

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">IMDA T&T</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Registro.php">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">¿Quienes Somos?</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contactenos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <button type="button" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="www.facebook.com">Facebook</button>
<button type="button" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="2165151351">Telefono</button>

<button type="button" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="Cl45 xcacd">Direccion</button>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- Datos Incorrectos-->
  <!--<div class="error">
      <span> Datos incorrectos, Intentelo de nuevo</span>
  </div>-->
 <!-- Formulario -->

    <DIV class="fondo">
    <form action="verificar_ingreso.php" method="post"  class ="bordes container justify-content-center align-items-center" >
        <div class="form-group">
    <BR><br>
    <img src="img/tyt-logo.png" class="rounded mx-auto d-block" alt="">
    <br><br>
    <label class="d-flex justify-content-around text-white h5 font-weight-light" >Usuario</label>
    <input name="cajaVUser" type="email" class="form-control" aria-describedby="emailHelp" placeholder=" Ingrese Usuario" required="">
    <small id="emailHelp" class="form-text text-white d-flex justify-content-around">Nunca prestes tu cuenta</small>
  </div>
  <div class="form-group">
    <label class="d-flex justify-content-around text-white h5 font-weight-light"> Contraseña</label>
    <input name="cajaVPass" type="password" class="form-control" placeholder="Ingrese contraseña" required="">
  </div>
  <div class="form-check d-flex justify-content-around">
    <label class="form-check-label text-white ">
      <input type="checkbox" class="form-check-inpu ">Recordarme</label>
  </div>
 <div align="center">
            <button type="submit" class="btn btn-primary  font-weight-light" role="button" aria-pressed="true">Ingresar</button>
            </div>
</form>

            </div>
        </DIV>
        </div>
        <!-- fin contenedor -->
 
    </div>
 </form>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
 
</html>