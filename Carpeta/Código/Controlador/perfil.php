<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;


$objConexion=Conectarse();
$instructor = "SELECT  u.Correo_SENA, u.ROL_id_rol, i.Num_doc,  i.EstadoInstructor_idEstadoInstructor, i.Tip_doc, i.NombresI, i.ApellidosI, i.Telefono, i.Direccion, i.Correo_corp, i.Correo_Pl, i.Area,e.idEstadoInstructor , e.EstadoInstruc from instructor as i INNER JOIN estadoinstructor as e on i.EstadoInstructor_idEstadoInstructor=e.idEstadoInstructor INNER JOIN usuario as u on  i.Correo_corp=u.Correo_SENA where i.Correo_corp = Correo_SENA ";

$resultado = $objConexion->query($instructor);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PERFIL</title>
<link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
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
  while ($instructor = $resultado->fetch_object())
  {
  ?>
  <?php
      $color='#CC2D05';
  ?>
   <div style="position: absolute; color:<?php echo $color;?>">► Nombre:</div>
       <div style="margin-left: 11.5%;"><td><?php  echo $instructor->NombresI ?></td>
        <td><?php  echo $instructor->ApellidosI  ?></td><br></div>

  <div style="position: absolute; color:<?php echo $color;?>">► Documento:</div>
       <div style="margin-left: 14.5%;"><td><?php  echo $instructor->Tip_doc," ",$instructor->Num_doc ?></td><br></div> 

  <div style="position: absolute; color:<?php echo $color;?>">► Estado:</div>
        <div style="margin-left: 10%;"><td><?php  echo $instructor->EstadoInstruc?></td><br></div>

  <div style="position: absolute; color:<?php echo $color;?>">► Contacto:</div>
        <div style="margin-left: 12%;"><td><?php  echo $instructor->Telefono ?></td><br></div>

  <div style="position: absolute; color:<?php echo $color;?>">► Dirección:</div>
        <div style=" margin-left: 13%;"><td><?php  echo $instructor->Direccion ?></td><br></div>

  <div style="position: absolute; color:<?php echo $color;?>">► Correo SENA:</div>
        <div style="margin-left: 17%"><td><?php  echo $instructor->Correo_corp ?></td><br></div>

  <div style="position: absolute; color:<?php echo $color;?>">► Correo Personal:</div>
        <div style="margin-left: 19%"><td><?php  echo $instructor->Correo_Pl ?></td><br></div>

  <div style="position: absolute; color:<?php echo $color;?>">► Area de Trabajo:</div>
         <div style="margin-left: 19%;"><td><?php  echo $instructor->Area ?></td><br></div>

        <div id="bot"> <td  align="center"><a href="EditarInstructor.php?Num_doc=<?php echo $instructor->Num_doc?>"><i  class="fas fa-color fa-user-cog fa-4x"></i></a></td></div>
  
</td>
    
<?php
  }
  ?>
  </div>
</div>
<div class="divbutton1">
<button  class="bto"><a href="javascript:history.back()"><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
  <style type="text/css">
    #imgper {
  position:absolute;
  left:38%;
  top:5%;
  width:200px;
  height:200px;
border-radius: 100px;
background-color: white;
color: transparent 100%;
}
#izq {
  position:absolute;
  left:20%;
  top:10%;
  width:60%;
  height:80%;
background:linear-gradient(30deg, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );
color: transparent 100%;
color: white;
-webkit-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
box-shadow: 12px 50px 55px 0px rgba(0,0,0,0.75);}
#datos {
  position:absolute;
  left:3%;
  top:50%;
  width:100%;
  height:50%;
color: transparent 100%;
color: white;
  line-height: 1.8;
  letter-spacing: 1px;
}
#bot{
  margin-left:65%;
  margin-top: -25%; 
}
.fa-color{
color: white;
}
.fa-color:hover{
  color: #CC2D05;
}
.bto {
  position:absolute;
  left:6%;
  top:10%;
  width:3%;
  height:6%;
  box-shadow:  5px 5px 5px black; 
  background-color:#E1E8EA;
}
.bto:hover{background-color: black;transition: 0.3s}
.fa-arrow-left{color:black; margin-top:-0.1%;}
.fa-arrow-left:hover{color: white;transition: 0.3s}

</style>
</body>
</html>