<?php
include "../Modelo/conexionBasesDatos.php";

$APRENDIZ_Nota= $_POST ["APRENDIZ_Nota"];
$R_APRENDIZAJE_Code_Res= $_POST ["R_APRENDIZAJE_Code_Res"];
$Nota = $_POST ["Nota"];


$objConexion=Conectarse();

$sql = "insert into notas (APRENDIZ_Nota, R_APRENDIZAJE_Code_Res,Nota)  
values ('$_REQUEST[APRENDIZ_Nota]','$_REQUEST[R_APRENDIZAJE_Code_Res]' ,'$_REQUEST[Nota]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "La inasistencia se ha agregado correctamente";
else
	echo "Problemas al Agregar inasistencia";
?>
