<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<body background= "../ABGS/Imagenes/fondosesion.jpeg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BIENVENIDOS AL SITIO OFICIAL DE ABSENCE AND BAD GRADES SOFTWARE</title>
<center><img src="../ABGS/Imagenes/LogoFondo.png">
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
color: transparent 100%;
}
#divRedes {
  position:absolute;
  left:780px;
  top:228px;
  width:190px;
  height:100px;
  background-color:transparent;
}
#imgRed{
  position:absolute;
  left:730px;
  top:200px;
}
#divbutton {
  position:absolute;
  left:420px;
  top:325px;
  width:125px;
  height:20px;
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
      <td width="61%"><label for="usuLogin">Email</label>
      <input title="Ingresa tu correo electrónico registrado" placeholder="Miriam@misena.edu.co" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$" name="usuLogin" type="text" id="usuLogin" size="35" required/></td>
    </tr>
    <tr>
      <td align="right"><img src="../ABGS/Imagenes/Llaves.png" width="50" height="50"></td>
      <td><label for="usuPassword">Password</label>
      <input  title="Ingresa tu contraseña" name="usuPassword" type="password" id="usuPassword" size="35" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input  type="submit" name="button" id="button" value="Log in" /></td>
    </tr>
    <tr>
    </tr>
  </table>
</form>
</div>
<div id="divbutton">
  <form id="form2" name="form2"  action="Controlador/Roles.php">
 <input  type="submit" name="button2" id="butto2" value="Create an account" />
  </div>
    </form>
    <div style="opacity: 0.7;" id="divLinea">
  </div>
    <div id="imgRed"> 
      <br>
      <img style="margin-top: 8px;" src="../ABGS/Imagenes/Google.png" width="50" height="50">
    </div>
  <div id="divRedes" > 
      <input style="color:white; background-color: royalblue; height: 40px; width: 170px;" type="submit" name="button4" id="button4" value="Continuar con Google" align="right" />
</div>
<style type="text/css">
  #pos{
      margin-top: -30px; left:480px;
      font-weight: bold;
      text-align:center;
      font-size: 20px;
  }
</style>
<center>
<?php
if ($x==1)
  echo "<br><p id=\"pos\"> Usuario no registrado con los datos ingresados, vuelva a intentar.</p>";
if ($x==2)
  echo "<br><p id=\"pos\"> Debe Iniciar Sesión para poder ingresar a la Aplicación";
if ($x==3)
  echo "<br><p id=\"pos\"> El Usuario ha cerrado la Sesión";
?>
</center>

</body>
</html>