<?php
require "../Modelo/conexionBasesDatos.php";

$objConexion=Conectarse();

$sql2=  "select * from instructor, tipoinstructor where (instructor.TipoInstructor_idTipoInstructor=tipoinstructor.idTipoInstructor)";

$resultado = $objConexion->query($sql2);

$cantidadInstructores = $resultado->num_rows;

echo "<br> Cantidad de instructores en la Base de Datos es: ".$cantidadInstructores;
echo "<br>";
//imprimir en pantalla los datos del empleado
while ($instructor = $resultado->fetch_object())
{
	echo "<br> Identificacion Instructor: ".$instructor->Num_doc;
	echo "<br> Estado Instructor: ".$instructor->EstadoInstructor_idEstadoInstructor;
	echo "<br> Tipo Instructor: ".$instructor->TipoInstructor;
	echo "<br> Tipo de documento: ".$instructor->Tip_doc;
	echo "<br> Nombre instructor: ".$instructor->NombresI;
	echo "<br> Apellido instructor: ".$instructor->ApellidosI;	
	echo "<br> Telefono instructor: ".$instructor->Telefono;	
	echo "<br> Direccion instructor: ".$instructor->Direccion;	
	echo "<br> Correo_SENA: ".$instructor->Correo_corp;
	echo "<br> correo_Pl : ".$instructor->Correo_Pl;	
	echo "<br>";
	echo "<br>";	
}

?>