<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))

  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select * from r_aprendizaje ";


$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar R_A</title>

</head>

<body>
<h1 align="center">R_APRENDIZAJES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY"style="color:white" >
    <td width="11%">Cod</td>
    <td width="16%">Instructor</td>
    <td width="16%">Ficha</td>
    <td width="16%">Nom_res</td>
    <td width="16%">Eliminar</td>
    <td width="16%">Modificar</td>
    <td width="16%">Agregar</td>
   
   

        


  </tr>
  
  
  <?php
  while ($r_aprendizaje = $resultado->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $r_aprendizaje->Code_Res ?></td>
        <td><?php  echo $r_aprendizaje->INSTRUCTOR_Num_doc ?>     </td>
        <td><?php  echo $r_aprendizaje->PROGRAMA_Ficha_carac?></td>
        <td><?php  echo $r_aprendizaje->Nom_Res ?> </td>

      
        
        <td align="center"><a href="eliminarR_A.php?Code_Res=<?php echo $r_aprendizaje->Code_Res?>"><img src="../Imagenes/eliminar.png" 
        
        width="29" height="24" /></a></td>
    
     <td align="center"><a href="EditarR_A.php?Code_Res=<?php echo $r_aprendizaje->Code_Res?>"><img src="../Imagenes/editar.jpg" width="29" height="24" /></a></td>
    
     <td align="center"><a href="frmAgregarR_A.php?=<?php echo $r_aprendizaje->Code_Res?>"><img src="../Imagenes/mas.png" width="29" height="24" /></a></td>
    

      

       
  <?php
  }
  ?>
  
</table>
</body>
</html>