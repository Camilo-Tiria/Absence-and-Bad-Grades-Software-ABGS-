<?php
require "../Modelo/conexionBasesDatos.php";
$Cod_Nota ;
$APRENDIZ_Nota ;
$R_APRENDIZAJE_Code_Res;
$Nota;

$objConexion=Conectarse();

$sql="SELECT N. Cod_Nota, N. R_APRENDIZAJE_Code_Res, N. Nota, A. Nombres ,R. Nom_Res FROM notas N, aprendiz A , r_aprendizaje R ";

$resultado1 = $objConexion->query($sql);


?>
<style>
.bt2{
  
  padding:6px;
  border-radius:10px;

}
.bt1{padding:6px;border-radius:10px;}
</style>

<button><a href="vistaPrincipalAprendiz.php?pg3=listarProgramas1"  class="bt2">VOLVER</a></button>
<button><a href="funcionesAprendices.php"  class="bt1">MODIFICAR</a></button>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Notas:)</title>

</head>
 
<body>
   <body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">

<h1 align="center">NOTAS</h1>
<center><table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY" style="color:white" >
    <td width="11%">Cod_Nota</td>
    <td width="16%">Aprendiz</td>
    <td width="16%">R_Aprendizaje</td>
    <td width="16%">Nota</td>

     
  </tr>
  <?php
  while ($notas = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $notas->Cod_Nota ?></td>
         <td><?php  echo $notas->Nombres ?></td>
          <td><?php  echo $notas->Nom_Res ?></td>
           <td><?php  echo $notas->Nota ?></td>

  <?php
  }
  ?>
        
</table></center>
</body>
</html>
