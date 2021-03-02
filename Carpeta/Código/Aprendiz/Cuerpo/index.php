<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<body background= "../ABGS/Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BIENVENIDOS AL SITIO OFICIAL DE ABSENCE AND BAD GRADES SOFTWARE</title>
<center><img src="../ABGS/Imagenes/LogoFondo.png" >
</center>
</head>

<body>
<style type="text/css">
 #divInicio {
  position:absolute;
  left:310px;
  top:115px;
  width:173px;
  height:500px;
  background-color:transparent;
}
#divLinea {
  position:absolute;
  left:680px;
  top:115px;
  width:10px;
  height:300px;
background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);
border-radius: 100px;
}
#divRedes {
  position:absolute;
  left:730px;
  top:170px;
  width:190px;
  height:200px;
  background-color:#353535;
}
#redes{
  position:absolute;
  left:100px;
  top:50px;
  width:0px;
  height:0px;
}
}
</style>
<br>
<br>
<form id="form1" name="form1" method="post" action="Controlador/validarInicioSesion.php">
  <div id="divInicio">
  <table   width="20%" border="0" align="center">
    <tr>
<br>
<br>

 <td colspan="2" align="left" class="texto"><font face="Algerian" size="5">Log In </font> </td>
    </tr>
    <tr>
      <td width="39%" align="right"><img src="../ABGS/Imagenes/Arroba.png" width="50" height="50"></td>
      <td width="61%"><label for="login">Email</label>
      <input title="Ingresa tu correo electrónico registrado" placeholder="Miriam@misena.edu.co" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$" name="login" type="text" id="login" size="35" required/></td>
    </tr>
    <tr>
      <td align="right"><img src="../ABGS/Imagenes/Llaves.png" width="50" height="50"></td>
      <td><label for="password">Password</label>
      <input title="Ingresa tu contraseña" name="password" type="password" id="pass" size="35" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Log in" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input  type="submit" name="button2" id="button2" value="Create an account" /></td>
    </tr>
  </table>
</form>
</div>
<div id="divLinea">
  </div>
<?php

if ($x==1)
  echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar", header('location:index.php?x==0');
if ($x==2)
  echo "<br><p align='center'> Deben Iniciar Sesión para poder ingresar a la Aplicación";
if ($x==3)
  echo "<br><p align='center'> El Usuario ha cerrado la Sesión";
?>


</body>
</html>