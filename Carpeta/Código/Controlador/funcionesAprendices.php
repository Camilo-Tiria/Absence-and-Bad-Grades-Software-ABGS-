<?php
require "../Modelo/conexionBasesDatos.php";
$Estado_idEstado ;
$PROGRAMA_Ficha_carac ;
$INSTRUCTOR_Num_doc;
$Tip_doc;
$Nombres;
$Apellidos;
$Tel_apre;
$Correo_SENA;
$Correo_Pl;

$objConexion=Conectarse();

$sql="SELECT * FROM aprendiz WHERE PROGRAMA_Ficha_carac = PROGRAMA_Ficha_carac ";

$resultado1 = $objConexion->query($sql);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Aprendices:)</title>

</head>
 
<body>
<body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
<h1 align="center">EDITAR APRENDICES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY" style="color:white">
    <td width="11%">N_doc</td>
    <td width="16%">Estado</td>
    <td width="16%">Tip_doc</td>
    <td width="19%">Nombres</td>
    <td width="12%">Apellidos</td>
    <td width="10%">Correo_SENA</td>
     <td width="10%">Ficha</td>
     <td width="10%">Modificar</td>
    <td width="10%">Eliminar</td>

  </tr>
  
  
  <?php
  while ($aprendiz = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $aprendiz->N_doc ?></td>
        <td><?php  echo $aprendiz->Estado_idEstado ?>     </td>
        <td><?php  echo $aprendiz->Tip_doc  ?> </td>
        <td><?php  echo $aprendiz->Nombres ?></td>
        <td><?php  echo $aprendiz->Apellidos  ?></td>
        <td><?php  echo $aprendiz->Correo_SENA ?></td>
        <td><?php  echo $aprendiz->PROGRAMA_Ficha_carac  ?>     </td>
    

        

        <td align="center"><a href="EditarAprendiz.php?N_doc=<?php echo $aprendiz->N_doc?>"><img src="../Imagenes/editar.jpg" width="29" height="24" /></a></td>
        
        <td align="center"><a href="eliminarAprendiz.php?N_doc=<?php echo $aprendiz->N_doc?>"><img src="../Imagenes/eliminar.png" 
        
        width="29" height="24" /></a></td>
    
       
  <?php
  }
  ?>
        
</table>
</body>
</html>

