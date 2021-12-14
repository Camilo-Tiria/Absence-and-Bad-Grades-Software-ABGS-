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


$aprendiz="SELECT u. Correo_SENA, u. ROL_id_rol ,a. N_doc, a. Estado_idEstado, a. PROGRAMA_Ficha_carac, a. Tip_doc, a. Nombres, a. Apellidos, a. Tel_apre, a. Correo_SENA, a. Correo_Pl, e. Nombre , e. idEstado,  p. Ficha_carac from aprendiz as a INNER JOIN estado as e on a. Estado_idEstado=e. idEstado Inner Join  programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac INNER JOIN usuario as u on  a .Correo_SENA=u. Correo_SENA where a. Correo_SENA = '$user' "; 

$resultado = $objConexion->query($aprendiz);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
<script src="script.js"></script>
<section>
<div class="reloj">
<span id="tiempo">00 : 00 : 00</span>
</div>
</section>
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
  margin-top: 13.20%;
  margin-bottom: -200px;
}
#somos{
  margin-left: 85%;
  margin-top:-8%;
  font-size: 130%;
}
#info{
  margin-top:4%;
  margin-left:85%;
}
#flecha{
  margin-left:90px;
}
section{
    position: fixed;
    width: 30%;
    left: 990px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.reloj{
    display: inline-block;
    color: #71767f;
    padding: 10px;
    font-weight: bold;
    font-size: 30px; 
    border-radius: 4px;
}
</style>
<script type="text/javascript">
  let html = document.getElementById("tiempo");

setInterval(function(){
  tiempo = new Date();

  horas = tiempo.getHours();
  minutos = tiempo.getMinutes();
  segundos = tiempo.getSeconds();

  //evitar los 0 o numeros individuales
  if(horas<10)
    horas = "0"+horas;
  if(minutos<10)
    minutos = "0"+minutos;
  if(segundos<10)
    segundos = "0"+segundos;

  html.innerHTML = horas+" : "+minutos+" : "+segundos;
},1000);
</script>
  <td><div class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
<body>
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
    <div id="info">
    <a id="flecha" ><b>🢁<br></b></a>
    <a id="letra"><center>Recuerde que puede<br> revisar <b>"Información"<br></b>  para conocer el correcto<br> funcionamiento del Sistema</center></a>
</div>
</body>
       <div id="divContenido">
      <?php include $pg.".php"; ?>
        </div>
        <div id="sesion"></div>
        <?php
        while ($aprendiz = $resultado->fetch_object())
  {
  ?>
  <?php
      $color='#CC2D05';
  ?> 
  </tr>
  <tr bgcolor="#CCCCCC">
        
        <td><?php  echo "¡Hola! Aprendiz ",$aprendiz->Nombres, " , has ingresado satisfactoriamente con tu correo: " ,$_SESSION["user"];?></td>
      

  <?php
  }
  ?>
            <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</head>
<div id="somos">
<a class="" style="font-style: italic;color: "  href="../Vista/QuienesSomosA.php" >¿Quiénes Somos?</a>
</div>
</html>



