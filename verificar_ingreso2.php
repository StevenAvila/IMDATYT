<?php 
session_start();

	$usuario=$_POST['cajaVUser'];
	$contrasena=$_POST['cajaVPass'];

	include("conexion.php"); 

	$comprobar = $connection ->query("SELECT * FROM usuario WHERE correo = '$usuario' AND contrasena = '$contrasena'");
		if($resultado = mysqli_fetch_array($comprobar))
		{
			$_SESSION['u_usuario']=$usuario;
			header("location: MenuPrincipal.php");
		}else
		{	
			echo("Datos Incorrectoss");
		}
 ?>