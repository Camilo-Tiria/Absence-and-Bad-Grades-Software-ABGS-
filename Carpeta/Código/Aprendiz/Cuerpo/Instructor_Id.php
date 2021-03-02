<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="select * from instructor, tipoinstructor  where Num_doc='10005645' and (instructor.TipoInstructor_idTipoInstructor=tipoinstructor.idTipoInstructor)";

$resultado = $objConexion->query($sql);
if ($instructor = $resultado->fetch_object())
{
	echo "<br> Identificacion Instructor: ".$instructor->Num_doc;
	echo "<br> Tipo de documento: ".$instructor->Tip_doc;
	echo "<br> Nombre Instructor: ".$instructor->NombresI;
	echo "<br> Apellido Instructor: ".$instructor->ApellidosI;	
	echo "<br> Telefono Instructor: ".$instructor->Telefono;	
	echo "<br> Correo_SENA : ".$instructor->Correo_corp;
	echo "<br> correo_Pl : ".$instructor->Correo_Pl;	
	echo "<br> Tipo Instructor: ".$instructor->TipoInstructor;
	echo "<br> Estado instructor: ".$instructor->EstadoInstructor_idEstadoInstructor;
}
else
	echo "No existe Instructor con esa identificacion";
?>


