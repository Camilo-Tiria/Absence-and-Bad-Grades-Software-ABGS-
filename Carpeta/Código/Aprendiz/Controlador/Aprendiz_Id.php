<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="select * from programa, programa  where N_doc='10005645' and (aprendiz.PROGRAMA_Ficha_carac=programa.Ficha_carac)";

$resultado = $objConexion->query($sql);
if ($aprendiz = $resultado->fetch_object())
{
	echo "<br> Identificacion Aprendiz: ".$aprendiz->N_doc;
	echo "<br> Tipo de documento: ".$aprendiz->Tip_doc;
	echo "<br> Nombre Aprendiz: ".$aprendiz->Nombres;
	echo "<br> Apellido Aprendiz: ".$aprendiz->Apellidos;	
	echo "<br> Telefono Aprendiz: ".$aprendiz->Tel_apre;	
	echo "<br> Correo_SENA Aprendiz: ".$aprendiz->Correo_SENA;
	echo "<br> correo_Pl Aprendiz: ".$aprendiz->Correo_Pl;	
	echo "<br> Ficha Aprendiz: ".$aprendiz->Ficha_carac;
	echo "<br> Programa Aprendiz: ".$aprendiz->Nom_Program;
}
else
	echo "No existe Aprendiz con esa identificacion";
?>








