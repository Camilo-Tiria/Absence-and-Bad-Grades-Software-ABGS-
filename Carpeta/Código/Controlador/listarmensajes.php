<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))

  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select * from solicitudes ";


$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Mensajes</title>

</head>

<body>
<h1 align="center">MENSAJES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY"style="color:white" >
    <td width="11%">Codigo</td>
    <td width="16%">Mensaje</td>
    <td width="16%">Para</td>
     <td width="16%">De</td>
 


  </tr>
  
  
  <?php
  while ($solicitudes = $resultado->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $solicitudes->Cod_s ?></td>
                <td><?php  echo $solicitudes->Mensaje ?></td>
                        <td><?php  echo $solicitudes->INSTRUCTOR_Num_doc ?></td>
                         <td><?php  echo $solicitudes->APRENDIZ_N ?></td>
    

      

       
  <?php
  }
  ?>
  
</table>
</body>
</html>