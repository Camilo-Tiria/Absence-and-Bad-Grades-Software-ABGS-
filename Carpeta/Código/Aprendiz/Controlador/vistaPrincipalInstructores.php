<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");
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
<title>INSTRUCTORES</title>
<body>
  <td><div class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
  <link rel="stylesheet" href="estiloprincipalaprendiz.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="EstiloVistasaprendiz.css?v=<?php echo(rand()); ?>" />
</head>
  <nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO ⟰ </a>
    <li><a href="vistaprincipalNotas.php?pg2=programas">MIS NOTAS ︾</a></li>
    <li><a href="vistaPrincipalMisAsistencias.php?pg2=programas1">ASISTENCIAS ︾</a></li>
    <li><a href="">logo ⟰</a></li>
    <li><a href="vistaPrincipalInstructores.php?pg2=Instructores">INSTRUCTORES ︾</a></li>
    <li><a href="VistaResultados.php?pg2=programas3">R_APRENDIZAJE ︾</a></li>
  </ul>
  </nav> 
<nav class="perfil"><ol>
    <li><center><i href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERFIL︙</i></center>
    <ol><li><a href="perfil.php?=Correo_SENA=<?=$_SESSION['user']?>">Mi Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⍈</a></li>
     <li><a href="mapeo.php">Información&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✓</a></li>
    <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li></tr>
    <tr>
    <td>&nbsp;</td>
    </tr><tr>  
    <td>&nbsp;</td>
    </tr>
    </nav>
</i>
<body>
<div id="divContenedor">
    <div id="divMenu">
    <table class="normal" summary="Tabla genérica" width="100%" height="454" border="1" align=""><tr>
    <td align="center"><a href="vistaPrincipalInstructores.php?pg2=Instructores">LISTAR</a></td></tr>
    <td align="center"><a href="vistaPrincipalInstructores.php?pg2=ConsultarInstructor">CONSULTAR</a></td></tr>
    </table>
    <div  id="divContenido">
    <?php include $pg2.".php"; ?>
    </div>
    </div>
    <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
</body>
</html>

