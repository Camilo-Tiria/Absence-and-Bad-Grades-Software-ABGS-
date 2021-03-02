<?php
require "../Modelo/conexionBasesDatos.php";

$Nombres;
$Apellidos;

$objConexion=Conectarse();

$sql="SELECT * FROM aprendiz WHERE N_doc = N_doc ";
$resultado1 = $objConexion->query($sql);



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Aprendices:)</title>

</head>
 
<body>
   <body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">

<h1 align="center">NOTAS</h1>
<center><table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY" style="color:white" >
    <td width="11%">N_doc</td>
    
    <td width="19%">Nombres</td>
    <td width="12%">Apellidos</td>
    <td width="12%">Calificar</td>
    
     
  </tr>
  <?php
  while ($aprendiz = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $aprendiz->N_doc ?></td>
      
        <td><?php  echo $aprendiz->Nombres ?></td>
        <td><?php  echo $aprendiz->Apellidos  ?></td>
         <td align="center"><a href="frmAgregarNOTAS.php?=<?php echo $aprendiz->N_doc?>"><img src="../Imagenes/CALIFICAR.jpg" width="29" height="24" /></a></td>
    

  <?php
  }
  ?>
        
</table></center>
</body>
</html>



























