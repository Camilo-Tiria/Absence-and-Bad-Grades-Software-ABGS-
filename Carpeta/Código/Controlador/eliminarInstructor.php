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
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();
$Num_doc = $_REQUEST['Num_doc'];
$sql="UPDATE instructor SET EstadoInstructor_idEstadoInstructor = 2 Where Num_doc='$Num_doc'";
$resultado = $objConexion->query($sql);
if ($resultado){
	
  echo "<script> swal.fire({
       title: '¡GENIAL!',
       text: '¡El instructor ha sido eliminado correctamente!',
       icon: 'success',
       }).then(function(){
        window.location.href='javascript:history.back()';
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
</BODY>
</HTML>


