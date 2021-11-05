<?php
include "../Modelo/conexionBasesDatos.php";

$N_doc = $_POST ["N_doc"];
$Estado_idEstado = $_POST ["Estado_idEstado"];
$PROGRAMA_Ficha_carac = $_POST ["PROGRAMA_Ficha_carac"];

$Tip_doc= $_POST ["Tip_doc"];
$Nombres= $_POST ["Nombres"];
$Apellidos= $_POST ["Apellidos"];
$Tel_apre= $_POST ["Tel_apre"];
$Correo_SENA= $_POST ["Correo_SENA"];
$Correo_Pl= $_POST ["Correo_Pl"];

$objConexion=Conectarse();

$sql = "insert into aprendiz (N_doc,Estado_idEstado,PROGRAMA_Ficha_carac,Tip_doc,Nombres,Apellidos,Tel_apre, Correo_SENA, Correo_Pl) 
values ('$_REQUEST[N_doc]' ,'$_REQUEST[Estado_idEstado]','$_REQUEST[PROGRAMA_Ficha_carac]','$_REQUEST[Tip_doc]', '$_REQUEST[Nombres]', '$_REQUEST[Apellidos]'
,'$_REQUEST[Tel_apre]','$_REQUEST[Correo_SENA]','$_REQUEST[Correo_Pl]')";

$resultado = $objConexion->query($sql);
if ($resultado){
	echo "<script>
                window.location= 'Agregarusuarioaprendiz.php?Correo_SENA=$Correo_SENA'
    </script>";}
 else{
 	echo "<script>
                alert('INSERCION INCORRECTA, VERIFIQUE LOS DATOS');
                
                window.location= 'javascript:history.back()'
    </script>";

}
?>