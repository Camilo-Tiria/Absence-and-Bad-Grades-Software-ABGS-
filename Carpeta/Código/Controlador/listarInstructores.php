<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))
  header("location:index.php?x=2"); 
  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select * from instructor ";

$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Instructores:</title>

</head>

<body>
<h1 align="center">INSTRUCTORES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY" style="color: white">
    <td width="11%">N_doc</td>
    <td width="16%">Tipo</td>
    <td width="16%">Estado</td>
    <td width="16%">Tip_doc</td>
    <td width="19%">Nombres</td>
    <td width="12%">Apellidos</td>
    <td width="15%">Telefono</td>
    <td width="16%">Direccion</td>
    <td width="10%">Correo_SENA</td>
    <td width="10%">Correo_Pl</td>
    

  </tr>
  
  
  <?php
  while ($instructor = $resultado->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $instructor->Num_doc ?></td>
        <td><?php  echo $instructor->TipoInstructor_idTipoInstructor ?>     </td>
        <td><?php  echo $instructor->EstadoInstructor_idEstadoInstructor?></td>
        <td><?php  echo $instructor->Tip_doc  ?> </td>
        <td><?php  echo $instructor->NombresI ?></td>
        <td><?php  echo $instructor->ApellidosI  ?></td>
        <td><?php  echo $instructor->Telefono ?></td>
        <td><?php  echo $instructor->Direccion ?></td>
        <td><?php  echo $instructor->Correo_corp ?></td>
        <td><?php  echo $instructor->Correo_Pl ?>     </td>
       
    
        
       
  <?php
  }
  ?>
  
</table>
</body>
</html>