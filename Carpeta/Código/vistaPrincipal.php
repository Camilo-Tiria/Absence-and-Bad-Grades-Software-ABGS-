
<?php
require "../Modelo/conexionBasesDatos.php";
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:/Proyecto_SENA/ABGS/?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial";
$objConexion=Conectarse();

$user=$_SESSION['user'];

$instructor = "SELECT  u.Correo_SENA, u.ROL_id_rol, i.Num_doc,  i.EstadoInstructor_idEstadoInstructor, i.Tip_doc, i.NombresI, i.ApellidosI, i.Telefono, i.Direccion, i.Correo_corp, i.Correo_Pl, i.Area,e.idEstadoInstructor , e.EstadoInstruc from instructor as i INNER JOIN estadoinstructor as e on i.EstadoInstructor_idEstadoInstructor=e.idEstadoInstructor INNER JOIN usuario as u on  i.Correo_corp=u.Correo_SENA where i.Correo_corp = '$user' ";

$resultado = $objConexion->query($instructor);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INICIO</title>
<body>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />


</body>
<style type="text/css">
#divPiePagina {
  left:2%;
  clear:both; 
  height:10%;
  margin-top: 0%;
  z-index:0;
background:linear-gradient(30deg, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );
}#sesion{
  margin-top: 14.6%;
  margin-bottom: -200px;
}
</style>
  <td><div class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
<body>
  <nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO ⟰</a>
    <li><a href="vistaPrincipalFichas.php?pg2=frmPrograma">FICHAS ︾</a></li>
    <li><a href="vistaPrincipalAprendiz.php?pg3=frmAgregarAprendiz">APRENDICES ︾</a></li>
    <li><a href="">logo︾</a></li>
    <li><a href="vistaPrincipalInstructor.php?pg3=listarInstructores">INSTRUCTORES ︾</a></li>
    <li><a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas">REGISTROS ︾  </a></li>
  </ul>
  </nav> 
  
<nav class="perfil"><ol>

  
    <li><i href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERFIL︙</i>
      <ol><li><a href="perfil.php?=<?=$_SESSION['user']?>">Mi Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⍈</a></li>
  <li><a href="contacto.php">Contacto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;☏</a></li>
      <li><a href="listarmensajes.php">Mensajes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✉</a></li>
      <li><a href="">Notificaciones&nbsp;&nbsp;&nbsp;✓</a></li>
    
      <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li>

        </tr>

    
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>  
          <td>&nbsp;</td>
        </tr>
    </nav>
</body>
       <div id="divContenido">
      <?php include $pg.".php"; ?>
        </div>
        <div id="sesion"></div>
        <?php
        while ($instructor = $resultado->fetch_object())
  {
  ?>
  <?php
      $color='#CC2D05';
  ?> 
  </tr>
  <tr bgcolor="#CCCCCC">
        
        <?php  echo "¡Hola! Instructor@ ",$instructor->NombresI, " , has ingresado satisfactoriamente con tu correo: " ,$_SESSION["user"];?>
      

  <?php
  }
  ?>
           
                        
          
          
            <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</head>
</html>