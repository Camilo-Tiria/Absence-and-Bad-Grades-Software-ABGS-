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

$sql = "INSERT INTO aprendiz (N_doc,Estado_idEstado,PROGRAMA_Ficha_carac,Tip_doc,Nombres,Apellidos,Tel_apre, Correo_SENA, Correo_Pl) 
VALUES ('$_REQUEST[N_doc]','$_REQUEST[Estado_idEstado]','$_REQUEST[PROGRAMA_Ficha_carac]','$_REQUEST[Tip_doc]','$_REQUEST[Nombres]', '$_REQUEST[Apellidos]','$_REQUEST[Tel_apre]','$_REQUEST[Correo_SENA]','$_REQUEST[Correo_Pl]')";

$resultado = $objConexion->query($sql);
if ($resultado){
	 echo "<script> swal.fire({
       title: '¡GENIAL!',
       text: '¡El aprendiz ha sido Registrado!',
       icon: 'success',
       }).then(function(){
        window.location.href='Agregarusuarioaprendiz.php?Correo_SENA=$Correo_SENA';
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