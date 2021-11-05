<?php
include "../Modelo/conexionBasesDatos.php";

$N_doc = $_POST ["N_doc"];
$Fecha_Inas = $_POST ["Fecha_Inas"];
$Observaciones= $_POST ["Observaciones"];
$Trimestre= $_POST ["Trimestre"];
$Area= $_POST ["Area"];
$Instruc_Tecnico= $_POST ["Instruc_Tecnico"];

$objConexion=Conectarse();

$sql = "insert into inasistencia (N_doc,Fecha_Inas,Observaciones,Trimestre,Area,Instruc_Tecnico)  
values ('$_REQUEST[N_doc]' ,'$_REQUEST[Fecha_Inas]','$_REQUEST[Observaciones]','$_REQUEST[Trimestre]','$_REQUEST[Area]'
,'$_REQUEST[Instruc_Tecnico]')";

$resultado = $objConexion->query($sql);

if ($resultado){
	echo "<script>
            
                
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