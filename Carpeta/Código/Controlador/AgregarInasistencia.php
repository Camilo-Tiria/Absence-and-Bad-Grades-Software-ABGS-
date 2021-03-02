<?php
include "../Modelo/conexionBasesDatos.php";
$APRENDIZ = $_POST ["APRENDIZ"];
$R_APRENDIZAJE_Code_Res = $_POST ["R_APRENDIZAJE_Code_Res"];
$Fecha_Inas = $_POST ["Fecha_Inas"];
$Periodo_Inas= $_POST ["Periodo_Inas"];
$Observaciones= $_POST ["Observaciones"];
$Cantidad_Horas= $_POST ["Cantidad_Horas"];

$objConexion=Conectarse();

$sql = "insert into inasistencia (APRENDIZ,R_APRENDIZAJE_Code_Res,Fecha_Inas,Periodo_Inas,Observaciones,Cantidad_Horas)  
values ('$_REQUEST[APRENDIZ]' ,'$_REQUEST[R_APRENDIZAJE_Code_Res]','$_REQUEST[Fecha_Inas]','$_REQUEST[Periodo_Inas]','$_REQUEST[Observaciones]'
,'$_REQUEST[Cantidad_Horas]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "La inasistencia se ha agregado correctamente";
else
	echo "Problemas al Agregar inasistencia";
?>

	
	
