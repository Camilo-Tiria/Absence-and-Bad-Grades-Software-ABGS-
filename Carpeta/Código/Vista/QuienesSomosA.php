<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Proyecto_SENA/ABGS/?x=2");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
<center><img src="../Imagenes/Logoprin.png"></center>
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUIENES SOMOS</title>
<body>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" href="quienesSomos.css?v=<?php echo(rand()); ?>" />
</body>
</head>

</div>
 <div id="imagen">
    <img class="leidy" id="leidy" src="../Imagenes/Leidy.jpeg">
        <div id="infor">
            <p id="cabeza">Leidy Calderón</p>
            <p id="texto">Autora y Desarrolladora de ABGS, orientada al perfeccionamiento y trabajo en grupo. Programadora FullStack enfocada en                          BackEnd</p>
        </div>
</div>

 <div id="imagen1">
    <img class="camilo" id="camilo" src="../Imagenes/Camilo2.png">
        <div id="infor1">
            <p id="cabeza1">Camilo Tiria</p>
            <p id="texto1">Autor y <br>Desarrollador de ABGS,con sentido de liderazgo y atento al detalle.<br> Programador <br>FullStack enfocado en FrontEnd </p>
        </div>
</div>
<div id="linea">
</div>

<div id="footer">
	<div id="secciones">
		<i><b>Secciones</b></i>
		<div class="">
		<li><a href="../VistaAprendiz/vistaPrincipal.php?pg=pgInicial">Inicio</a></li>
		<li><a href="../VistaAprendiz/vistaprincipalNotas.php?pg2=programas">Mis notas</a></li>
		<li><a href="../VistaAprendiz/vistaPrincipalMisAsistencias.php?pg2=programas1">Mis asistencias</a></li>
		<li><a href="../VistaAprendiz/vistaPrincipalInstructores.php?pg2=Instructores">Instructores</a></li>
		<li><a href="../VistaAprendiz/VistaResultados.php?pg2=programas3">R_aprendizajes</a></li>
		</div>
	</div>
<div id="info">
		<i><b>Más Información</b></i>
		<div class="">
		<li><a href="#MisionABGS">Misión</a></li>
		<div id="MisionABGS" class="modal">
		<div class="modal-contenido">
		<lu><a href="#close">X</a></lu>
		<center><i><h2>✶Absence and Bad Grades Software✶</h2></i></center>
		<p>Nuestra Misión es almacenar toda la información relacionada con los <b>Aprendices</b> para que de esta manera los <b>Instructores</b> SENA puedan <b>visualizarla y administrarla</b> de la mejor manera. Así mismo, los 
        <b>Aprendices podrán verificar su proceso académico</b>.</p>
		</div>  
		</div>

		<li><a href="#VisionABGS">Visión</a></li>
		<div id="VisionABGS" class="modal">
		<div class="modal-contenido">
		<lu><a href="#close">X</a></lu>
		<center><i><h2>✶Absence and Bad Grades Software✶</h2></i></center>
		<p>	<b>Facilitar</b> el trabajo de los <b>Instructores</b> del programa <b>ADSI</b>, agilizar la visualización de posibles procesos reglamentarios frente a los <b>Aprendices</b></p>
		</div>  
		</div>

		<li><a href="#HistoriaABGS">Historia</a></li>
		<div id="HistoriaABGS" class="modal">
		<div class="modal-contenido">
		<lu><a href="#close">X</a></lu>
		<center><i><h2>✶Absence and Bad Grades Software✶</h2></i></center>
		<p><b>ABGS</b> se empezó a construir el 20 de Abril del año 2020 por los desarrolladores <b>Leidy Calderón y Camilo Tiria</b>, desde ese entonces <b>ABGS</b> ha tenido diversos <b>cambios y mejoras</b> estructurales tanto 
        internos (Modelado y código fuente) como externos (Interfaces Gráficas), hasta el punto actual en el que se encuentra. </p>
		</div>  
		</div>		
		</div>
	    </div>

<button id="contacto"><a href="../Controlador/contacto.php">Contacto</a></button>
<div id="direccion"><b>Sede Molinos</b><br>Cll.49 A bis sur #10D-20<br><br><b>Sede Kennedy</b><br>Cll.49 #89A-92</div>
<div id="redes"><b>Redes Sociales</b></div>
	<style>
  		@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
	</style>
<ul class="social-icons">
  <a href="https://www.facebook.com/profile.php?id=100074249007603" class="social-icon"> <i class="fa fa-facebook"></i></a>
  <a href="https://api.whatsapp.com/send?phone=573144350542&text=Hola,%20¿Necesito%20informacion?%20Gracias" class="social-icon"> <i class="fa fa-whatsapp"></i></a>
  <a href="https://www.instagram.com/abgscompany/" class="social-icon"> <i class="fab fa-instagram"></i></a>
</ul>
</div>
</html>