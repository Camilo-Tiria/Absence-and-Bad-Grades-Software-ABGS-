<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql="select * from usuario where usuLogin = '$_REQUEST[usuLogin]' and usuPassword = '$_REQUEST[usuPassword]'";


$resultado=$objConexion->query($sql);


$existe = $resultado->num_rows;
if ($existe==1)  
{
	$usuario=$resultado->fetch_object();

	$_SESSION['user']= $usuario->usuLogin;	
	header("location:vistaPrincipal.php");	
}
else
{
	header("location:/Leidy_Calderon_Guia_2/ABGS/?x=1"); 
}
?>