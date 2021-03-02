<?php
require "../Modelo/conexionBasesDatos.php";

$Cod_Inas;
$APRENDIZ;
$R_APRENDIZAJE_Code_Res;
$Fecha_Inas;
$Periodo_Inas;
$Observaciones;
$Cantidad_Horas;

$sql="SELECT  * FROM inasistencia ";
$objConexion=Conectarse();
$resultado1 = $objConexion->query($sql);



?>
<style>
.bt2{
  
  padding:6px;
  border-radius:10px;

}
.bt1{padding:6px;border-radius:10px;}
</style>

<button><a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas"  class="bt2">VOLVER</a></button>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Asistencias:)</title>

</head>
 
<body>
   <body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">

<h1 align="center">REGISTROS ASISTENCIAS</h1>
<center><table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY" style="color:white" >
    <td width="11%">Codigo</td>
     <td width="11%">Aprendiz</td>
    <td width="16%">Fecha</td>
    <td width="19%">Periodo</td>
    <td width="12%">Observaciones</td>
    <td width="15%">Cantidad Horas</td>
 
     
  </tr>
  <?php
  while ($inasistencia = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC"> 
        <td><?php  echo $inasistencia->Cod_Inas ?></td>
        <td><?php  echo $inasistencia->APRENDIZ ?></td>
        <td><?php  echo $inasistencia->Fecha_Inas ?></td>
        <td><?php  echo $inasistencia->Periodo_Inas ?></td>
        <td><?php  echo $inasistencia->Observaciones ?></td>
        <td><?php  echo $inasistencia->Cantidad_Horas ?></td>
       
  <?php
  }
  ?>
        
</table></center>
</body>
</html>
