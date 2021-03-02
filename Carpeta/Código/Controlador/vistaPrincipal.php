
<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
		
	</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABSENCE AND BAD GRADES SOFTWARE</title>
<body>
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
	<td><div class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
</body>
<style type="text/css">
#divPiePagina {
	left:25px;
	top:0px;
	clear:both;	
	height:65px;
	z-index:0;

background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);


}

</style>
<body>
	<nav class="Menu"><ul>
		<a href="vistaPrincipal.php?pg=pgInicial">Inicio </a>
		<a href="vistaPrincipalFichas.php?pg">Fichas</a>
        <a href="vistaPrincipalAprendiz.php?pg">Aprendices</a>
  		<a href="">logo</a>
  		<a href="vistaPrincipalInstructor.php?pg">Instructores</a>
		<a href="vistaPrincipalAsistencia.php?pg">Asistencia y Notas </a>

		<a href="salir.php">Salir</a>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>	
          <td>&nbsp;</td>
        </tr>
     </ul>
</nav>              
</body>
     <div id="divContenido">
      <?php include $pg.".php"; ?>
        </div>
            <?PHP    
                             echo "Has iniciado sesion como " ,$_SESSION["user"];
                            
                        ?>

   
            <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</head>
</html>
            

