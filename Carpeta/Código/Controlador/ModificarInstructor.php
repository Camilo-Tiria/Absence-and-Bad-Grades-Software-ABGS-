<?php
include "../Modelo/conexionBasesDatos.php";

$Num_doc = $_REQUEST ["Num_doc"];
$TipoInstructor_idTipoInstructor = $_REQUEST ["TipoInstructor_idTipoInstructor"];
$EstadoInstructor_idEstadoInstructor = $_REQUEST ["EstadoInstructor_idEstadoInstructor"];
$NombresI= $_REQUEST ["NombresI"];
$ApellidosI= $_REQUEST ["ApellidosI"];
$Telefono= $_REQUEST ["Telefono"];
$Direccion= $_REQUEST ["Direccion"];
$Correo_Pl= $_REQUEST ["Correo_Pl"];
$Tip_doc= $_REQUEST ["Tip_doc"];
$Correo_corp= $_REQUEST ["Correo_corp"];
$objConexion=Conectarse();

 $sql = "UPDATE instructor SET  TipoInstructor_idTipoInstructor ='$TipoInstructor_idTipoInstructor' , EstadoInstructor_idEstadoInstructor='$EstadoInstructor_idEstadoInstructor',  NombresI='$NombresI',ApellidosI='$ApellidosI',   Telefono='$Telefono',Direccion ='$Direccion' ,Correo_Pl='$Correo_Pl',Tip_doc='$Tip_doc', Correo_corp='$Correo_corp' WHERE Num_doc='$Num_doc'";

$resultado = $objConexion->query($sql);

if ($resultado){
	header('location:listarInstructores1.php');
}
else
	{
 	echo "<script>
                alert('Por favor inserte todos los datos del formulario');
                
                window.location= 'javascript:history.back()'
    </script>";

}
?>