
<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial";


$sql="SELECT * from usuario ";

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
<link rel="stylesheet" href="estiloprincipalaprendiz.css?v=<?php echo(rand()); ?>" />


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
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO </a>
    <li><a href="vistaPrincipalNotas.php?pg2=MisnotasIngles">MIS NOTAS</a></li>
    <li><a href="vistaPrincipalMisAsistencias.php?pg2=AsistenciasIngles">MIS ASISTENCIAS</a></li>
    <li><a href="">logo</a></li>
    <li><a href="vistaPrincipalInstructores.php?pg2=Instructores">INSTRUCTORES</a></li>
    <li><a href="vistaPrincipalR_aprendizajes.php?pg2=R_ingles">R_APRENDIZAJE</a></li>
  </ul>
  </nav> 
<nav class="perfil"><ol>
    <li><center><i href="">PERFIL</i></center>
      <ol><li><a href="perfil.php?=Correo_SENA=<?=$_SESSION['user']?>">Mi Perfil</a></li>
  
      <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión</a></li></ol></li>

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
        <?PHP  
           echo "Has iniciado sesion como Aprendiz y tu correo es: " ,$_SESSION["user"];
                        
          ?>
            <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</head>
</html>