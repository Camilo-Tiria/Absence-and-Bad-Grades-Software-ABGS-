<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
if (!isset($_REQUEST['pg2']))
  $pg2="pgInicial2";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASISTENCIA-NOTAS</title>
<body>
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
<style type="text/css">
#divContenedor {
  
  left:px;
  top:19px;
  width:1000px;
  height:500px;
  z-index:1;
  margin:0 auto;
}
#divMenu a{
  color:#E9ECEC;
  text-decoration: none;
  font-family: Time-New-Roma;
}
#divMenu a:hover{
  color:#C82D2D;
   font-family: Time-New-Roma;
}
#divMenu {
  position:absolute;

  left:-1px;
  top:119px;
  width:166px;
  height:500px;
  z-index:0;
  background-image: url(https://media.giphy.com/media/8mz9YJidZMGXndg6eH/giphy.gif);
   font-family: Time-New-Roma;

}

  #divContenido {
    position:absolute;
    left:200px;
    top:20px;
    width:990px;
    height:450px;
    z-index:0;
    overflow:auto;
    }
#divPiePagina {
  position:absolute;
  left:0px;
  top:557px;
  height:67.5px;
  width: 1279.2px;
  z-index:1;
background:linear-gradient(30deg, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );

}



  }
</style>
</head>
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
</i>
<body>
<div id="divContenedor">
    <div id="divMenu">
      <table class="normal" summary="Tabla genérica" width="100%" height="440" border="1" align="center">
        <tr>
          <td align="center"><a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas">ASISTENCIAS</a></td>
        </tr>
        <tr>
          <td align="center"><a href="vistaPrincipalAsistencia.php?pg2=calificacionesficha">CALIFICACIONES</a></td>
        </tr>
         <tr>
          <td align="center"><a href="vistaPrincipalAsistencia.php?pg2=frmAgregarR_A">AGREGAR_R_A</a></td>
        </tr>

        <tr>
        <td align="center"><a href="vistaPrincipalAsistencia.php?pg2=listaR_Aprendizajes">R_APRENDIZAJE</a></td>
        </tr>
      </table>
      <div id="divContenido">
      <?php include $pg2.".php"; ?>
        </div>
    </div>
        <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
    
</body>
</html>

