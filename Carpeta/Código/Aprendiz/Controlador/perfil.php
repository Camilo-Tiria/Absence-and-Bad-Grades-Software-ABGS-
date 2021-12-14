<?php
require "../Modelo/conexionBasesDatos.php";
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");
if (!isset($_REQUEST['pg']))
  $pg="pgInicial";

$user=$_SESSION['user'];
$objConexion=Conectarse();
$aprendiz="SELECT u. Correo_SENA,u. Rol_id_rol, a. N_doc, a. Estado_idEstado, a. PROGRAMA_Ficha_carac,a. Tip_doc, a. Nombres,a. Apellidos, a. Correo_SENA, a. Correo_Pl, a. Tel_apre, e. idEstado, e. Nombre from aprendiz as a  INNER JOIN estado as e on a.Estado_idEstado = e. idEstado INNER JOIN  usuario as u on  a .Correo_SENA=u. Correo_SENA where a. Correo_SENA = '$user' "; 

$resultado = $objConexion->query($aprendiz);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PERFIL</title>
  <link rel="stylesheet" href="Perfil.css?v=<?php echo(rand()); ?>" />
<link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<script src="https://kit.fontawesome.com/b78262bdfc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="
sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
<body>  
<div  id="izq">
  <div id="imgper">
    <img style="width: 110%; margin-left: -5%; margin-top: -5%" src="../Imagenes/fotoperfilmen.png">
  </div>
  <div id="datos">
    <?php
  while ($aprendiz = $resultado->fetch_object())
  {
  ?>
  <?php
      $color='#A4F7ED ';
  ?>   
    <div style="position: absolute; color:<?php echo $color;?>">► Nombre:</div>
    <div style="margin-left: 11.5%;"><td><?php  echo $aprendiz->Nombres ?></td>
    <td><?php  echo $aprendiz->Apellidos ?></td><br></div>

    <div style="position: absolute; color:<?php echo $color;?>">► Documento:</div>
    <div style="margin-left: 14.5%;"><td><?php  echo $aprendiz->Tip_doc," ",$aprendiz->N_doc ?></td><br></div> 

    <div style="position: absolute; color:<?php echo $color;?>">► Estado:</div>
    <div style="margin-left: 10%;"><td><?php  echo $aprendiz->Nombre?></td><br></div>

    <div style="position: absolute; color:<?php echo $color;?>">► Contacto:</div>
    <div style="margin-left: 12%;"><td><?php  echo $aprendiz->Tel_apre ?></td><br></div>

    <div style="position: absolute; color:<?php echo $color;?>">► Ficha:</div>
    <div style="margin-left: 11%;"><td><?php  echo $aprendiz->PROGRAMA_Ficha_carac ?></td><br></div>

    <div style="position: absolute; color:<?php echo $color;?>">► Correo SENA:</div>
    <div style="margin-left: 17%"><td><?php  echo $aprendiz->Correo_SENA ?></td><br></div>

    <div style="position: absolute; color:<?php echo $color;?>">► Correo Personal:</div>
    <div style="margin-left: 19%"><td><?php  echo $aprendiz->Correo_Pl ?></td><br></div>

    <div id="bot2"> <td  align="center"><a id="bot2" href="CambioContra.php"><i class="fas fa-color2 fa-lock fa-2x"></i>Seguridad</a></td></div>
</td> 
<?php
  }
  ?>
  </div>
</div>
<div class="divbutton1">
<button  class="bto"><a href="javascript:history.back()"><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
</body>
</html>










