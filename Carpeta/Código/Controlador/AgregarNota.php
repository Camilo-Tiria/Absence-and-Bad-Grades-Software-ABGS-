<?php
include "../Modelo/conexionBasesDatos.php";


$N_doc= $_POST ["N_doc"];
$R_APRENDIZAJE_Code_Res= $_POST ["R_APRENDIZAJE_Code_Res"];
$Area = $_POST ["Area"];
$Nota = $_POST ["Nota"];
$Trimestre= $_POST ["Trimestre"];
$INSTRUCTOR_Num_doc= $_POST ["INSTRUCTOR_Num_doc"];


$objConexion=Conectarse();

$sql = "insert into notas (N_doc, R_APRENDIZAJE_Code_Res,Area,Nota,Trimestre,INSTRUCTOR_Num_doc)  
values ('$_REQUEST[N_doc]','$_REQUEST[R_APRENDIZAJE_Code_Res]' ,'$_REQUEST[Area]','$_REQUEST[Nota]','$_REQUEST[Trimestre]','$_REQUEST[INSTRUCTOR_Num_doc]')";

$resultado = $objConexion->query($sql);

if ($resultado){
	echo "<script>
 window.location= 'javascript:history.back()'
    </script>";}
 else{
 	echo "<script>
                alert(NO SE PUDO INGRESAR LOS DATOS DE LA NOTA');
                
                 window.location= 'javascript:history.back()'
    </script>";

}

?>