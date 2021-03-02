<?php
include "../Modelo/conexionBasesDatos.php";
$Ficha_carac=$_REQUEST["Ficha_carac"];
$Tipo_Formacion= $_REQUEST ["Tipo_Formacion"];
$Modalidad= $_REQUEST ["Modalidad"];

$objConexion=Conectarse();

 $sql = "UPDATE programa SET  Tipo_Formacion='$Tipo_Formacion',Modalidad='$Modalidad' WHERE Ficha_carac='$Ficha_carac'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header('location:vistaPrincipalFichas.php?pg2=funcionesProgramas')

?>


