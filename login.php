<?php
session_start();
require_once "clases/Usuario.php";
require_once "clases/AccesoDatos.php";
require_once "clases/Auto.php";
$usuario = Usuario::BuscarUnUsuarioParaLogin($_POST['usuario'],md5($_POST['password']));

if($usuario != null)
{
	$_SESSION['UsuarioActual'] = $_POST['usuario'];	
	//Crear cochera con lugares disponibles y guardarlo en una variable de session, en total de suponen 100 lugares menos los ocupados
	$ocupados = count(Auto::TraerTodosLosAutos());
  	$_SESSION['Cochera']=100-$ocupados;
  	$_SESSION['id']=$usuario->id;
	echo 1;
}
else
{
	echo md5($_POST['password']);//error de logeo
}
?>