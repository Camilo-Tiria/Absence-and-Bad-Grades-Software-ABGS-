<?php
include "../Modelo/conexionBasesDatos.php";

$Code_Res = $_POST ["Code_Res"];
$INSTRUCTOR_Num_doc = $_POST ["INSTRUCTOR_Num_doc"];
$PROGRAMA_Ficha_carac= $_POST ["PROGRAMA_Ficha_carac"];
$Nom_Res= $_POST ["Nom_Res"];

$objConexion=Conectarse();

 $sql = "UPDATE r_aprendizaje SET  INSTRUCTOR_Num_doc='$INSTRUCTOR_Num_doc',PROGRAMA_Ficha_carac='$PROGRAMA_Ficha_carac',Nom_Res='$Nom_Res' WHERE Code_Res='$Code_Res'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header('location:vistaPrincipalAsistencia.php?pg2=listaR_Aprendizajes')

?>


