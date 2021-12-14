<?php  
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
 
$Correo_SENA=$_GET["Correo_SENA"];
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM aprendiz WHERE Correo_SENA='$Correo_SENA'");
$aprendiz=mysqli_fetch_array($actualizar);
$Correo_SENA= $aprendiz["Correo_SENA"];

$sql1 = "SELECT * FROM roles WHERE Nombre_rol = 'Aprendiz'";

$resultado2 = $objConexion->query($sql1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
<link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<body background= "../Imagenes/FOL11.jpg" style="background-repeat:no-repeat; background-position: absolute;background-size: cover">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet"  href="estilos1.css?v=<?php echo(rand()); ?>">
      <link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
      <link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">

<title>AGREGAR USUARIO</title>
<style type="text/css">

label, input,select {
  font-size: 0.9em;
  font-family: Time-new-Roman;
}
.input:hover{
    border-color: blue;
}
.fa-eye-slash{
  color: white;
}
.boton{
  background-color: #7F3CE7;
  border-radius: 0%;
  margin-top: 0.5%;
  margin-left: -15%;
  border-color: #7F3CE7;
  height: 22px;
}
.boton:hover{
  background-color: #722BDE;
}
</style>
<body>
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  <nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO ⟰</a>
    <li><a href="vistaPrincipalFichas.php?pg2=frmprograma">FICHAS ︾</a></li>
    <li><a href="vistaPrincipalAprendiz.php?pg3=frmAgregarAprendiz">APRENDICES ︾</a></li>
    <li><a href="">logo︾</a></li>
    <li><a href="vistaPrincipalInstructor.php?pg3=listarInstructores">INSTRUCTORES ︾</a></li>
    <li><a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas">REGISTROS ︾  </a></li>
  </ul>
  </nav> 
  
<nav class="perfil"><ol>

      <li><i href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERFIL︙</i>
      <ol><li><a href="perfil.php?=<?=$_SESSION['user']?>">Mi Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⍈</a></li>
      <li><a href="listarmensajes.php">Mensajes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✉</a></li>
      <li><a href="">Notificaciones&nbsp;&nbsp;&nbsp;✓</a></li>
      <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li>
          <td>&nbsp;</td>
        </tr>
        <tr>  
          <td>&nbsp;</td>
        </tr>
    </nav>
</body>
<script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
</script>
<body>
  <form style="margin-top:7%;border-radius:20px;background:#ddd;" id="form1" name="form1" method="post" action="AgregarUsuApre.php">

 <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white; font-family: Time-new-Roman; ">✬CREAR USUARIO APRENDIZ✬</td></center><tr><br>

  <label for="">Correo SENA:</label>
  <input type="hidden" name="Correo_SENA" value="<?php echo $_REQUEST['Correo_SENA'] ?>">
  <input title="Correo_SENA"  required name="Correo_SENA" type="email" id="Correo_SENA" value="<?php echo $Correo_SENA;?>"size="40" /></td></tr>
            
  <label for="">Contraseña:</label>
  <input ID="txtPassword" type="Password" name="usuPassword" pattern="(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ].*" title="Debe tener al menos una mayúscula, una minúscula y un dígito" placeholder="**********"  size="25"minlength="8" maxlength="16" required/>      
  <button style="margin-left:90%;margin-top:-7.9%" id="show_password" class="boton" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button><br><tr>
      
  <label for="">Rol:</label>
  <select required name="ROL_id_rol" id="ROL_id_rol" size="0" style="width:320px" title="Rol aprendiz">
      <?php
        while ($ROL_id_rol = $resultado2->fetch_object()) { ?>
        <option value="<?php echo $ROL_id_rol->id_rol ?>"><?php echo $ROL_id_rol->Nombre_rol ?></option>
        <?php
         }
      ?>
  </select>

  <label for="">Fecha_nac:</label>
  <input title="Fecha_nac"  required name="Fecha_nac" type="date" id="Fecha_nac" name="Fecha_nac" size="40" /></td></tr>

<br><div class="divbutton1">
<button class="bto"><a href="javascript:history.back()" class="fas fa-arrow-left fa-2x"></a></button></div><tr>
<td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Agregar" /></td>
</tr>
</table>
</form> 
</body>
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
<html>