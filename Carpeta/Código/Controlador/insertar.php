<?php
include "../Modelo/conexionBasesDatos.php";

$APRENDIZ = $_POST ['APRENDIZ'];
$R_APRENDIZAJE_Code_Res = $_POST ['R_APRENDIZAJE_Code_Res'];
$Fecha_Inas = $_POST ['Fecha_Inas'];
$Periodo_Inas= $_POST ['Periodo_Inas'];
$Observaciones= $_POST ['Observaciones'];
$Cantidad_Horas= $_POST ['Cantidad_Horas'];
$objConexion=Conectarse();

$cadena = "INSERT INTO inasistencia (APRENDIZ,R_APRENDIZAJE_Code_Res,Fecha_Inas,Periodo_Inas,Observaciones,Cantidad_Horas) VALUES  ('$_REQUEST[APRENDIZ]' ,'$_REQUEST[R_APRENDIZAJE_Code_Res]','$_REQUEST[Fecha_Inas]','$_REQUEST[Periodo_Inas]','$_REQUEST[Observaciones]'
,'$_REQUEST[Cantidad_Horas]')";

for ($i =0; $i <count($APRENDIZ); $i++){
	$cadena.="('".$APRENDIZ[$i]."','".$R_APRENDIZAJE_Code_Res[$i]."','".$Fecha_Inas[$i]."','".$Periodo_Inas[$i]."','".$Observaciones[$i]."','".$Cantidad_Horas[$i]."')";}


$Cadena_final = $objConexion->query($cadena);

if ($Cadena_final)
echo json_encode(array('error' => false));
else
	echo json_encode(array('error' => true));
?>
