
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
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABSENCE AND BAD GRADES SOFTWARE</title>
<body>
  
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
<style type="text/css">
#divContenedor {
  
  left:px;
  top:19px;
  width:1100px;
  height:500px;
  z-index:1;
  margin:0 auto;
}
#divMenu a{
  color:#E9ECEC;
  text-decoration: none;
}
#divMenu a:hover{
  color:#C82D2D;
}
#divMenu {
  position:absolute;

  left:40px;
  top:125px;
  width:173px;
  height:500px;
  z-index:0;
  background-image: url(https://media.giphy.com/media/8mz9YJidZMGXndg6eH/giphy.gif);

}

  #divContenido {
    position:absolute;
    left:180px;
    top:50px;
    width:1120px;
    height:450px;
    z-index:0;
    overflow:auto;
    }
#divPiePagina {
  position:absolute;
  left:0px;
  top:590px;
  height:60px;
  width: 1261px;
  z-index:1;
background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);

}
</style>
</head>
<nav class="Menu"><ul>
    <a href="vistaPrincipal.php?pg=pgInicial">Inicio </a>
    <a href="vistaPrincipalFichas.php?pg">Fichas</a>
        <li> <a href="vistaPrincipalAprendiz.php?pg">Aprendices</a>
      <a href="">logo</a>
      <a href="vistaPrincipalInstructor.php?pg">Instructores</a>
    <a href="vistaPrincipalAsistencia.php?pg">Asistencia-Notas  </a>
  <tr>
          <td align="center"><a href="salir.php">Salir</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>  
          <td>&nbsp;</td>
        </tr>
     </ul>
</nav>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
<h1 align="center">R_APRENDIZAJES</h1>
<center><table width="89%" border="0" align="center">
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
    
     <td align="center"><a href="EditarR_A.php?Code_Res=<?php echo $r_aprendizaje->Code_Res?>"><img src="../Imagenes/Engranajes.png" width="29" height="24" /></a></td>
    
     <td align="center"><a href="frmAgregarR_A?Code_Res=<?php echo $r_aprendizaje->Code_Res?>"><img src="../Imagenes/mas.png" width="29" height="24" /></a></td>
    

      

       
  <?php
  }
  ?>
</tr>                               
          </table></center>
  </form>
</body>
<style>
#divbutton1 {
  position:absolute;
  left:80px;
  top:170px;
  width:69px;
  height:20px;
  box-shadow:  5px 5px 5px black; 
}
#divPiePagina {
  position:absolute;
  left:0px;
  top:590px;
  height:59px;
  width: 1366px;
  z-index:1;
background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);

  }
  </style>
<div id="divbutton1">
<button><a style="text-decoration: none;" href="vistaPrincipalAsistencia.php?pg2=listaR_Aprendizajes"  class="bt2">VOLVER</a></button>
</div>
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
<html>
