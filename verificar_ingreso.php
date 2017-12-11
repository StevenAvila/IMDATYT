<?php
session_start();

if(isset($_POST['cajaVUser'])and isset($_POST['cajaVPass']))
{

		include('conexion.php');

		$comprobar_correo=mysqli_real_escape_string($connection,$_POST['cajaVUser']);
		$comprobar_contraseña=mysqli_real_escape_string($connection,$_POST['cajaVPass']);
		$comprobar_email = 'select * from usuario where correo="'.$comprobar_correo.'"';
		$comprobacion=$connection->query($comprobar_email);

	if($comprobacion->num_rows>0)
	{
		$mirar_bd=mysqli_query($connection,'select contrasena from usuario where correo="'.$comprobar_correo.'"');
		$obtener_dato=mysqli_fetch_assoc($mirar_bd);
		$verificar_contraseña = password_verify($comprobar_contraseña,$obtener_dato['contrasena']);
			if($verificar_contraseña)
			{
				$_SESSION['Incorreo']=$comprobar_correo;
				header("location: MenuPrincipal.php");
			}	
			else
			{
				echo "Datos Incorrectos";
			}
	}	
		else
		{
			echo "No esta registrado";
		}
} 
	else
	{
		header('location:index.php');
	}

 ?>