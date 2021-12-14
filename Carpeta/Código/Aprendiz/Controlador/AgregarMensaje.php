<?php
include "../Modelo/conexionBasesDatos.php";

$N_doc = $_POST ["N_doc"];
$R_APRENDIZAJE_Code_Res = $_POST ["R_APRENDIZAJE_Code_Res"];
$Area= $_POST ["Area"];
$Trimestre= $_POST ["Trimestre"];
$INSTRUCTOR_Num_doc= $_POST ["INSTRUCTOR_Num_doc"];
$Mensaje= $_POST ["Mensaje"];
$Nota= $_POST ["Nota"];

$objConexion=Conectarse();

$sql = "insert into mensajes (N_doc,R_APRENDIZAJE_Code_Res,Area, Trimestre, INSTRUCTOR_Num_doc, Mensaje, Nota)  
values ('$_REQUEST[N_doc]' ,'$_REQUEST[R_APRENDIZAJE_Code_Res]','$_REQUEST[Area]','$_REQUEST[Trimestre]','$_REQUEST[INSTRUCTOR_Num_doc]','$_REQUEST[Mensaje]','$_REQUEST[Nota]')";

$resultado = $objConexion->query($sql);

if ($resultado){
	echo "<script>
            
                 alert('bien');
                window.location= 'javascript:history.back()'
    </script>";
}
else{
 	echo "<script>
                alert('INSERCION INCORRECTA, VERIFIQUE SUS DATOS');
                
                window.location= 'javascript:history.back()'
    </script>";
}
?>