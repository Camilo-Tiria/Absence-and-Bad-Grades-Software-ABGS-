<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))

  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select * from programa ";


$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Programas</title>

</head>

<body>
<h1 align="center">LISTAR FICHAS</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY"style="color:white" >
    <td width="11%">Ficha</td>
    <td width="16%">Nom_Programa</td>
    <td width="16%">Area</td>
    <td width="16%">Fecha inicio</td>
    <td width="19%">Tipo_formacion</td>
    <td width="12%">Modalidad</td>


  </tr>
  
  
  <?php
  while ($programa = $resultado->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $programa->Ficha_carac ?></td>
        <td><?php  echo $programa->Nom_Program ?>     </td>
        <td><?php  echo $programa->Area?></td>
        <td><?php  echo $programa->Fecha_Ingr ?> </td>
        <td><?php  echo $programa->Tipo_Formacion ?></td>
        <td><?php  echo $programa->Modalidad  ?></td>

      

       
  <?php
  }
  ?>
  
</table>
</body>
</html>