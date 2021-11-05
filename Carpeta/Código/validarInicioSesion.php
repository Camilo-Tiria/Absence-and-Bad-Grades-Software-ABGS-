<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";	

$Correo_SENA = $_POST['Correo_SENA'];
$usuPassword =$_POST['usuPassword'];
$ROL_id_rol=$_POST['ROL_id_rol'];
$usuPassword = hash('sha512', $usuPassword);

$objConexion=Conectarse();
$aprendiz = "select * from usuario where Correo_SENA = '$Correo_SENA' and usuPassword = '$usuPassword' and ROL_id_rol='1'";

$instructor = "select * from usuario where Correo_SENA = '$Correo_SENA' and usuPassword = '$usuPassword'and ROL_id_rol='2'";


$resultado1 = $objConexion->query($aprendiz);
$resultado2 = $objConexion->query($instructor);

$aprendiz = $resultado1->num_rows;
$instructor = $resultado2->num_rows;

if ($aprendiz==1)  
{
	$usuario=$resultado1->fetch_object();

	$_SESSION['user']= $usuario->Correo_SENA;	
	header("location:../VistaAprendiz/vistaPrincipal.php");	
}elseif($instructor==1)  
{
	$usuario=$resultado2->fetch_object();

	$_SESSION['user']= $usuario->Correo_SENA;	
	header("location:vistaPrincipal.php");	
}else 
{
	header("location:/Proyecto_SENA/ABGS/?x=1"); 
}


?>