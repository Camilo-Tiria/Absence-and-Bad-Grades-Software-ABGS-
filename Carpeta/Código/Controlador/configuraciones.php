<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))

  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select * from configuraciones ";


$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar configuraciones</title>

</head>

<body>
<tr>
    <br>
    <tr>
    <br>
    
    <tr>
    <br>
    <tr>
    <br>
    
    <tr>
    <br>
    

<table width="89%" border="0" align="center">
  <tr align="center" bgcolor=""style="color:black" >
    <td width="11%">MENSAJES</td>
    <td width="16%">NOTIFICACIONES</td>
     <td width="16%">MI PERFIL</td>
    <tr>

   
   

      
        <td align="center"><a href="listarmensajes.php?>"> <img src="../Imagenes/mensajes.png" 
        
        width="100" height="100" /></a></td>
    
     <td align="center"><a href="eliminarR_A.php?>"> <img src="../Imagenes/notificaciones.png" width="100" height="100" /></a></td>
      <td align="center"><a href="eliminarR_A.php?>">  <img src="../Imagenes/usuario.png" width="100" height="100" /></a></td>
    
    
   
    

      


  
</table>
</body>
</html>