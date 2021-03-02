
<?php
include "../Modelo/conexionBasesDatos.php";
$N_doc=$_REQUEST["N_doc"];
$Estado_idEstado = $_REQUEST ["Estado_idEstado"];
$Nombres= $_REQUEST ["Nombres"];
$Apellidos= $_REQUEST ["Apellidos"];
$Tel_apre= $_REQUEST ["Tel_apre"];
$Correo_Pl= $_REQUEST ["Correo_Pl"];



$objConexion=Conectarse();

$sql = "UPDATE aprendiz SET Estado_idEstado ='$Estado_idEstado' ,   Nombres='$Nombres',Apellidos='$Apellidos',   Tel_apre='$Tel_apre',  Correo_Pl='$Correo_Pl' WHERE N_doc='$N_doc'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header('location:listarAprendices.php')
?>


