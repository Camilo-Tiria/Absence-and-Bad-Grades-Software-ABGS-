<?php  
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

$sql = "select * from usuario";
$sql1 = "select id_rol , Nombre_rol from roles ";


$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<title>TÉRMINOS Y CONDICIONES</title>
<link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	body {
  font: 13px/1.6 Tahoma, sans-serif;
  background: #353535;
}

.izquierda {
  float: left;
  clear: left;
}

.derecha {
  float: right;
  clear: right;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;

}

#contenedor {
  background: #F3F0F0;
  border: 0px solid silver;
  margin: 2em auto;
  padding: 1em;
  width: 690px;
  text-align: justify;   
}
</style>


</head>


<body>
	<br>
<div id="contenedor">


<font face="Times New Roman" size="6">Términos y condiciones </font>
</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img style="height: 60px;" src="../Imagenes/Logo2.png">
<table width="690" cellspacing="1" cellpadding="3" border="0" bgcolor="#165">

    <td bgcolor="#fff">
   <font face="Time-new-Roma" size=1.20>
<b>*Requisitos:</b>
  <br>
Es requisito necesario para la adquisición de los servicios de <b>ABGS</b> que se ofrecen en este sitio, que <b>lea y acepte los siguientes Términos y Condiciones</b> que a continuación se redactan.
<br><br>
Todos los servicios que son ofrecidos por nuestro sitio web de <b>ABGS</b> pudieran ser creadas, cobradas, enviadas o presentadas por una página web tercera y en tal caso estarían sujetas a sus <b>Términos y condiciones</b>.
<br><br>
Para adquirir el servicio, será necesario el registro por parte del Instructor, con ingreso de datos personales y definición de una contraseña.
El instructor puede elegir y cambiar la clave para su acceso de administración de la cuenta en cualquier momento,asi como el aprendiz que puede realizar un cambio de clave cuando lo requiera, El Instructor es el encargado de realizar el registro de sus aprendices.
<br><br><b>ABGS</b> no asume la responsabilidad en caso de que entregue dicha clave a terceros.
<br><br>
<b>*Uso no autorizado:</b>
  <br>
<b>ABGS</b> es de uso exclusivo para instructores y aprendices del SENA que pertenezcan al área de Análisis y Desarrollo de Sistemas de Información.
<br><br>
<b>*Privacidad:</b>
<br>
<b>ABGS</b> garantiza que la información personal que usted envía cuenta con la seguridad necesaria. Los datos ingresados por usuario o en el caso de requerir una validación de los registros ingresados no serán entregados a terceros, salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos legales.




   </font>
   </td>
</tr>
</table>
<script type="text/javascript">	
function myFunction() {
  var x = document.getElementById("myCheck").required;
  document.getElementById("demo").innerHTML = x;}	


</script>

<form action="FormularioPrincipal.php">
 
  <input type="checkbox" id="myCheck" name="test" required>
  He leído y acepto los términos y condiciones 
  <br><br>
</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit"></form>
  
  
<style type="text/css">
#divbutton3 {
  position:absolute;
  left:80px;
  top:60px;
  width:69px;
  height:20px;
}
.fa-arrow-left{
  color:black;

}
.fa-arrow-left:hover
{
  color: #0B1594;
}

</div>


 
</body>
</html>