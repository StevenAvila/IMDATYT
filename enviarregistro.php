<?php 
if (isset($_POST['cajaNombre']) and isset($_POST['cajaApellido'])and isset($_POST['cajaContraseña'])and isset($_POST['cajaCorreo'])and isset($_POST['cajaDireccion'])and isset($_POST['cajaGenero'])){

	include 'coneccion.php';

	$nombre_usuario = mysqli_real_escape_string($connection,$_POST['cajaNombre']);
	$apellido_usuario = mysqli_real_escape_string($connection,$_POST['cajaApellido']);
	$contraseña_usuario = password_hash($_POST['cajaContraseña' ], PASSWORD_DEFAULT);
	$correo_usuario = mysqli_real_escape_string($connection,$_POST['cajaCorreo']);
	$direccion_usuario = mysqli_real_escape_string($connection,$_POST['cajaDireccion']);
	$genero_usuario = mysqli_real_escape_string($connection,$_POST['cajaGenero']);

	$insertar_usuario = mysqli_query($connection,'insert into usuario (nombre,apellidos,correo,contrasena,direccion) values ("'.$nombre_usuario.'","'.$apellido_usuario.'","'.$correo_usuario.'","'.$contraseña_usuario.'","'.$direccion_usuario.'")');
	//$insertar_genero = mysqli_query($connection, 'insert into genero(descripcion_genero) values("'.$genero_usuario.'")') or die ('No se pudo registrar<br>'.mysqli_error($connection);

	mysqli_close($connection);
	header('location: index.php');
}else{
	header('location: index.php');
 }
?>
