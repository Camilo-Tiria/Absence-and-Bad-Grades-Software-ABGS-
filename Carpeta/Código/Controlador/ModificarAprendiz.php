
<?php
include "../Modelo/conexionBasesDatos.php";
$N_doc=$_REQUEST["N_doc"];
$PROGRAMA_Ficha_carac = $_REQUEST ["PROGRAMA_Ficha_carac"];
$Estado_idEstado = $_REQUEST ["Estado_idEstado"];
$Nombres= $_REQUEST ["Nombres"];
$Apellidos= $_REQUEST ["Apellidos"];
$Tel_apre= $_REQUEST ["Tel_apre"];
$Correo_Pl= $_REQUEST ["Correo_Pl"];
$Correo_SENA= $_REQUEST ["Correo_SENA"];
$Tip_doc= $_REQUEST ["Tip_doc"];



$objConexion=Conectarse();

$sql = "UPDATE aprendiz SET Estado_idEstado ='$Estado_idEstado' ,PROGRAMA_Ficha_carac ='$PROGRAMA_Ficha_carac' ,   Nombres='$Nombres',Apellidos='$Apellidos',   Tel_apre='$Tel_apre',  Correo_Pl='$Correo_Pl', Correo_SENA='$Correo_SENA', Tip_doc='$Tip_doc' WHERE N_doc='$N_doc'";

$resultado = $objConexion->query($sql);

if ($resultado){
	echo "<script>
                window.location= 'funcionesAprendices.php?PROGRAMA_Ficha_carac= $_REQUEST[PROGRAMA_Ficha_carac] '
    </script>";
}
else
	{
 	echo "<script>
                alert('Por favor inserte todos los datos del formulario');
                
                window.location= 'javascript:history.back()'
    </script>";

}
?>