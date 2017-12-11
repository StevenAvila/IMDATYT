<!DOCTYPE html>
<html>
<head>
    <title> GENERACION DE LA CUENTA</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Generarcuenta.css">
     <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<style>
  .fondo{
                   background: url("img/Blue.jpg");
            height: 94.2vh;
            background-size: cover;
            background-position: center;
          }
          .bordes{
            background:  #27272B;
            width: 1180px;
            height: 620px;
            border: 2px solid #4872B2;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            box-shadow: inset 0 0 20px #4872B2;
            position: absolute;
            top:  180px;
            left: 350px; 
            right: 150px;
            
  }
          </style>
<body>

               <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">IMDA T&T</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Iniciar Sesion <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">¿Quienes Somos?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contactenos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Facebook</a>
          <a class="dropdown-item" href="#">Telefono</a>
          <a class="dropdown-item" href="#">Ubicacion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- Formulario Registro -->
<div class="fondo ">
<div class=" container fluid bg-dark " >
  <div class="bordes ">
    <br>
    
  
  <img src="img/tyt-logo.png" class="rounded mx-auto d-block mt-5" alt="">
  <h1 class="display-4 d-flex justify-content-center text-white mt-2">Registro</h1>
  <br>
      <form  class="container " action="enviarregistro.php" method="post">
                <div class="form-row ">
                    <div class="form-group col-md-6 text-white">
                      <label>Nombres</label>
                      <input type="text" class="form-control" id="cajaNombre" placeholder="Nombres" name="cajaNombre" required="" >
                    </div>



                    <div class="form-group col-md-6 text-white">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="cajaApellido" placeholder="Apellidos" name="cajaApellido" required="">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group text-white col-md-3">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" id="cajaContraseña" placeholder="*******" name="cajaContraseña" required="">
                    </div>


                    <div class="form-group text-white col-md-3">
                        <label>Confirme Contraseña</label>
                        <input type="password" class="form-control" id="cajaContraseña1" placeholder="*******" name="cajaContraseña1" required="">
                    </div>
                

                  <div class="form-group col-md-3 text-white">
                    <label>Correo</label>
                    <input type="email" placeholder="Ejemplo@ejemplo.com" id="cajaCorreo" class="form-control" name="cajaCorreo" required="">
                  </div>


                  <div class="form-group col-md-3 text-white">
                    <label>Direccion</label>
                    <input type="text" placeholder="Cll 00 #00-00 norte" id="cajaDireccion" class="form-control" name="cajaDireccion" required=""> 
                  </div>
                </div>

                
  <div class="form-row justify-content-center text-white">
    <div class="form-group col-md-5 text-white">
      <label>Genero</label>
      <select id="cajaGenero" class="form-control" name="cajaGenero" required="">
        <option selected>Elija...</option>
        <option>Femenino</option>
        <option>Masculino</option>
        <option>Indeterminado</option>
      </select>
    </div>
  </div>
            <div align="center">
            <button type="submit" class="btn btn-primary  font-weight-light" role="button" aria-pressed="true">Registrarme</button>
            </div>
</form>
</div>
</div>
</div>



 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
</body>
 
</html>