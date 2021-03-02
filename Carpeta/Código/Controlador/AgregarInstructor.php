<?php
include "../Modelo/conexionBasesDatos.php";

$Num_doc = $_POST ["Num_doc"];
$TipoInstructor_idTipoInstructor = $_POST ["TipoInstructor_idTipoInstructor"];
$EstadoInstructor_idEstadoInstructor = $_POST ["EstadoInstructor_idEstadoInstructor"];
$Tip_doc= $_POST ["Tip_doc"];
$NombresI= $_POST ["NombresI"];
$ApellidosI= $_POST ["ApellidosI"];
$Telefono= $_POST ["Telefono"];
$Direccion= $_POST ["Direccion"];
$Correo_corp= $_POST ["Correo_corp"];
$Correo_Pl= $_POST ["Correo_Pl"];

$objConexion=Conectarse();

$sql = "insert into instructor (Num_doc,TipoInstructor_idTipoInstructor,EstadoInstructor_idEstadoInstructor,Tip_doc,NombresI,ApellidosI,Telefono, Direccion, Correo_corp, Correo_Pl)  
values ('$_REQUEST[Num_doc]' ,'$_REQUEST[TipoInstructor_idTipoInstructor]','$_REQUEST[EstadoInstructor_idEstadoInstructor]','$_REQUEST[Tip_doc]', '$_REQUEST[NombresI]', '$_REQUEST[ApellidosI]'
,'$_REQUEST[Telefono]','$_REQUEST[Direccion]','$_REQUEST[Correo_corp]','$_REQUEST[Correo_Pl]')";

$resultado = $objConexion->query($sql);

if ($resultado){
	echo "<script>
                alert('AGREGADO CORRECTAMENTE');
                
                window.location= 'vistaPrincipalInstructor.php?pg3=listarInstructores'
    </script>";}
 else{
 	echo "<script>
                alert('INSERCION INCORRECTA, VERIFIQUE SUS DATOS');
                
                window.location= 'vistaPrincipalInstructor.php'
    </script>";

}
?>