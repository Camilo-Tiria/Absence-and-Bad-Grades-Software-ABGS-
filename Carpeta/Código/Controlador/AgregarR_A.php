<?php
include "../Modelo/conexionBasesDatos.php";

$Code_Res = $_POST ["Code_Res"];
$INSTRUCTOR_Num_doc = $_POST ["INSTRUCTOR_Num_doc"];
$PROGRAMA_Ficha_carac= $_POST ["PROGRAMA_Ficha_carac"];
$Nom_Res= $_POST ["Nom_Res"];

$objConexion=Conectarse();

$sql = "insert into r_aprendizaje (Code_Res,INSTRUCTOR_Num_doc,PROGRAMA_Ficha_carac,Nom_Res)  
values ('$_REQUEST[Code_Res]' ,'$_REQUEST[INSTRUCTOR_Num_doc]','$_REQUEST[PROGRAMA_Ficha_carac]','$_REQUEST[Nom_Res]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "El R_aprendizaje se ha agregado correctamente";
else
	echo "Problemas al Agregar R_aprendizaje";
?>