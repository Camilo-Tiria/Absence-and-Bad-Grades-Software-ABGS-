<?php
include "../Modelo/conexionBasesDatos.php";
$Num_doc = $_REQUEST ["Num_doc"];
$TipoInstructor_idTipoInstructor = $_REQUEST ["TipoInstructor_idTipoInstructor"];
$EstadoInstructor_idEstadoInstructor = $_REQUEST ["EstadoInstructor_idEstadoInstructor"];
$Tip_doc= $_REQUEST ["Tip_doc"];
$NombresI= $_REQUEST ["NombresI"];
$ApellidosI= $_REQUEST ["ApellidosI"];
$Telefono= $_REQUEST ["Telefono"];
$Direccion= $_REQUEST ["Direccion"];
$Correo_corp= $_REQUEST ["Correo_corp"];
$Correo_Pl= $_REQUEST ["Correo_Pl"];
$objConexion=Conectarse();

 $sql = "UPDATE instructor SET  TipoInstructor_idTipoInstructor ='$TipoInstructor_idTipoInstructor' , EstadoInstructor_idEstadoInstructor='$EstadoInstructor_idEstadoInstructor',Tip_doc='$Tip_doc',  NombresI='$NombresI',ApellidosI='$ApellidosI',   Telefono='$Telefono',Direccion ='$Direccion' ,Correo_corp='$Correo_corp', Correo_Pl='$Correo_Pl'  WHERE Num_doc='$Num_doc'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header('location:vistaPrincipalInstructor.php?pg3=listarInstructores1')

?>

