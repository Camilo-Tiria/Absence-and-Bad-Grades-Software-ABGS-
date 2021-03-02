<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['userA']))
  header("location:index.php?x=2");
if (!isset($_REQUEST['pg2']))
  $pg2="pgInicial2";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
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
  height:600px;
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
  width: 1500px;
  z-index:1;
background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);

}



  }
</style>
</head>
  <nav class="Menu"><ul>
  <a href="vistaPrincipal.php?pg=pgInicial">Inicio </a>
        <a href="vistaPrincipalAprendiz.php?pg">Mi Perfil</a>
           <a href="vistaPrincipalAsistencia.php?pg">Asistencias</a>
      <a href="">logo</a>
      <a href="vistaPrincipalNotas.php?pg">Notas</a>
    <a href="vistaPrincipalSolicitudes.php?pg">Solicitudes </a>
  
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
<body>
<div id="divContenedor">
    <div id="divMenu">
      <table class="normal" summary="Tabla genérica" width="100%" height="500" border="5" align="center">
       
          <td align="center"><a href="vistaPrincipalAsistencia.php?pg2=calificacionesficha">CALIFICACIONES</a></td>
        
      </table>
      <div id="divContenido">
      <?php include $pg2.".php"; ?>
        </div>
    </div>
        <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
    
</body>
</html>

