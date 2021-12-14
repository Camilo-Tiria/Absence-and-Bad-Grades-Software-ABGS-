<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
</head>
</html>

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
$Area= $_POST ["Area"];

$objConexion=Conectarse();

$sql = "INSERT INTO instructor (Num_doc,TipoInstructor_idTipoInstructor,EstadoInstructor_idEstadoInstructor,Tip_doc,NombresI,ApellidosI,Telefono, Direccion, Correo_corp, Correo_Pl,Area)VALUES('$_REQUEST[Num_doc]' ,'$_REQUEST[TipoInstructor_idTipoInstructor]','$_REQUEST[EstadoInstructor_idEstadoInstructor]','$_REQUEST[Tip_doc]', '$_REQUEST[NombresI]', '$_REQUEST[ApellidosI]'
,'$_REQUEST[Telefono]','$_REQUEST[Direccion]','$_REQUEST[Correo_corp]','$_REQUEST[Correo_Pl]','$_REQUEST[Area]')";

$resultado = $objConexion->query($sql);
if ($resultado){
	 echo "<script> swal.fire({
       title: '¡GENIAL!',
       text: '¡Su Información ha sido registrada correctamente',
       icon: 'success',
       }).then(function(){
        window.location.href='/Proyecto_SENA/ABGS';
        });
       </script>";  
   }
 else{
 echo "<script> swal.fire({
       title: '¡ERROR!',
       text: '¡Confirme que todos los datos sean correctos!',
       icon: 'error',
       }).then(function(){
        window.location.href='javascript:history.back()';
        });
       </script>"; 
}
?>



