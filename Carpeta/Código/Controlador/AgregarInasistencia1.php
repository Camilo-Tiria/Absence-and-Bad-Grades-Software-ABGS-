<?php
include "../Modelo/conexionBasesDatos.php";

$base = $_POST ["N_doc"];
$Fecha_Inas = $_POST ["Fecha_Inas"];
$Observaciones= $_POST ["Observaciones"];
$Trimestre= $_POST ["Trimestre"];
$Area= $_POST ["Area"];
$Instruc_Tecnico= $_POST ["Instruc_Tecnico"];

$objConexion=Conectarse();

$cadena = "INSERT INTO inasistencia (N_doc,Fecha_Inas,Observaciones,Trimestre,Area,Instruc_Tecnico)  
VALUES ";

for ($i = 0; $i < count($base); $i++){
	$cadena.="('".$base[$i]."','".$Fecha_Inas[$i]."','".$Observaciones[$i]."','".$Trimestre[$i]."','".$Area[$i]."','".$Instruc_Tecnico[$i]."'),";
}

$cadena_final = substr($cadena, 0, -1);
$cadena_final.=";";

if($mysqli->query($cadena_final)):
	echo json_encode(array('error' => false));
else:
    echo json_encode(array('error' => true));
endif;

?>

