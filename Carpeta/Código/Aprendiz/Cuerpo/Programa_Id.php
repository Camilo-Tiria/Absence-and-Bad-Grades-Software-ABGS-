<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="select * from  programa ";

$resultado = $objConexion->query($sql);
if ($programa = $resultado->fetch_object())
{
	echo "<br> Ficha: ".$programa->Ficha_carac;
	echo "<br> Programa: ".$programa->Nom_program;
	echo "<br> Area: ".$programa->Area;
	echo "<br> Fecha ingreso: ".$programa->Fecha_Ingr;	
	echo "<br> Tipo Formacion: ".$programa->Tipo_Formacion;	
	echo "<br> Modalidad: ".$programa->Modalidad;

}
else
	echo "No existe ficha ";
?>