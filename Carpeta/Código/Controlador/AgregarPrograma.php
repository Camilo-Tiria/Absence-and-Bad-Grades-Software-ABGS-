<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>AGREGAR FICHA</title>
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
$Ficha_carac = $_POST ["Ficha_carac"];
$Nom_Program = $_POST ["Nom_Program"];
$Area = $_POST ["Area"];
$Fecha_Ingr= $_POST ["Fecha_Ingr"];
$Tipo_Formacion= $_POST ["Tipo_Formacion"];
$Jornada= $_POST ["Jornada"];
$Trimestres= $_POST ["Trimestres"];
$Modalidad= $_POST ["Modalidad"];
$Estado= $_POST ["Estado"];

$objConexion=Conectarse();

$sql = "INSERT INTO programa (Ficha_carac,Nom_Program,Area,Fecha_Ingr,Tipo_Formacion,Jornada,Trimestres,Modalidad,Estado)VALUES('$_REQUEST[Ficha_carac]' ,'$_REQUEST[Nom_Program]','$_REQUEST[Area]','$_REQUEST[Fecha_Ingr]','$_REQUEST[Tipo_Formacion]','$_REQUEST[Jornada]','$_REQUEST[Trimestres]','$_REQUEST[Modalidad]','$_REQUEST[Estado]')";

$resultado = $objConexion->query($sql);

if ($resultado){
  echo "<script> swal.fire({
       title: '¡GENIAL!',
       text: '¡La Ficha ha sido Creada con exito!',
       icon: 'success',
       }).then(function(){
        window.location.href='vistaPrincipalFichas.php?pg2=listarProgramas';
        });
       </script>";    
}
else{
  echo "<script> swal.fire({
       title: '¡ERROR!',
       text: '¡Confirme que la Ficha no exista!',
       icon: 'error',
       }).then(function(){
        window.location.href='javascript:history.back()';
        });
       </script>";     
}
?>