<?php
require "../Modelo/conexionBasesDatos.php";

$objConexion=Conectarse();

$sql2=  "select * from aprendiz, programa where (aprendiz.PROGRAMA_Ficha_carac=programa.Ficha_carac)";

$resultado = $objConexion->query($sql2);

$cantidadAprendices = $resultado->num_rows;

echo "<br> Cantidad de aprendices en la Base de Datos es: ".$cantidadAprendices;
echo "<br>";
//imprimir en pantalla los datos del empleado
while ($aprendiz = $resultado->fetch_object())
{
	echo "<br> Identificacion Aprendiz: ".$aprendiz->N_doc;
	echo "<br> Estado Aprendiz: ".$aprendiz->Estado_idEstado;
	echo "<br> ID Instructor: ".$aprendiz->INSTRUCTOR_Num_doc;
	echo "<br> Tipo de documento: ".$aprendiz->Tip_doc;
	echo "<br> Nombre Aprendiz: ".$aprendiz->Nombres;
	echo "<br> Apellido Aprendiz: ".$aprendiz->Apellidos;	
	echo "<br> Telefono Aprendiz: ".$aprendiz->Tel_apre;	
	echo "<br> Correo_SENA Aprendiz: ".$aprendiz->Correo_SENA;
	echo "<br> correo_Pl Aprendiz: ".$aprendiz->Correo_Pl;	
	echo "<br> Ficha Aprendiz: ".$aprendiz->Ficha_carac;
	echo "<br> Programa Aprendiz: ".$aprendiz->Nom_Program;
	echo "<br>";
	echo "<br>";	
}

?>