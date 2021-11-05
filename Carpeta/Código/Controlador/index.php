<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../ABGS/Imagenes/icon.ico" type="image/x-icon">
<body background= "../ABGS/Imagenes/fondosesion.jpeg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    <div id="stil"><img style="width: 55%;height: 20%; opacity: 1" src="../ABGS/Imagenes/lol11.jpg"></div>

</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABGS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center><img src="../ABGS/Imagenes/LogoFondo.png">
</center>
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
</head>

<body>
<style type="text/css">
 #divInicio {
  position:absolute;
  left:20%;
  top:19%;
  width:173px;
  height:3px;
  background-color:transparent;
}
#divLinea {
  position:absolute;
  left:50%;
  top:23%;
  width:10px;
  height:270px;
border-radius: 100px;
background:linear-gradient(30deg, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );


}

#divContra{
  position:absolute;
  left:21.6%;
  top:50%;
  width:200px;
  height:25px;
  font-size: 15px;
}
#divContra1{
  position:absolute;
  left:21.6%;
  top:53%;
  width:200px;
  height:30px;
  font-size: 15px;
}

#divfrase{
  position:absolute;
  left:715px;
  top:312px;
  width:430px;
  height:30px;
  font-size: 15px;
}
#divfrase1{
 position:absolute;
  left:710px;
  top:310px;
  width:440px;
  height:105px;
  font-size: 15px;
  background-color: gray;
  opacity: 0.6
  font-size-family: Time-new-Roman;

}
#divimg{
  position:absolute;
  left:800px;
  top:145px;
 opacity:0.8;
box-shadow: 1px 3px 20px 25px #E6E2E1  ;

}
#stil{
  position:absolute;
  left:80px;
  top:128px;
  width: 90%;
 opacity:0.8;
 -webkit-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
box-shadow: -1px 11px 80px 0px rgba(0,0,0,0.75);
}

label, input,select {

  font-size: 0.9em;
  font-family: Time-new-Roman;
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
<br>
<br>


 <td colspan="2" align="left" class="texto"><font face="Algerian" style="margin-left: -20%" size="5">Log In </font> </td>
 
    </tr>
    <tr>
      <td width="39%" ><img src="../ABGS/Imagenes/arrroba.jpg" style="margin-left: -125% "width="35" height="35"></td>
      <td width="61%"><label  style="margin-left: -10% " for="Correo_SENA">Email</label>
      <input style="margin-left: -22px " maxlength="40" title="Ingresa tu correo electrónico registrado" placeholder="Miriam@misena.edu.co" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$" name="Correo_SENA" type="email" id="Correo_SENA" size="28" required/></td>
    </tr>
    <tr>
      <td ><img src="../ABGS/Imagenes/Llaves11.png" style="margin-left: -125% "width="35" height="35" ></td>
      <td><label style="margin-left: -10% " for="usuPassword">Password</label>
      <input style="margin-left: -20.6px" id="txtPassword" minlength="8" maxlength="16" title="Ingresa tu contraseña" name="usuPassword" placeholder="*******" type="password" id="usuPassword" size="23" required/></td>
    </tr>
  
   
  </table>
</form> 
<button style="margin-left: 135%; margin-top: -14%" id="show_password" class="boton" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
      <center><td colspan="2" align="center"><input style="margin-left: 116%; margin-top: 2%;" type="submit" name="button" id="button" value="Aceptar" /></td></center>
    </tr>
    

</div>

  <a id="divContra1" style="font-style: italic;color: "  href="Controlador/Roles.php" >Crear cuenta</a>
    </form>
    <div style="opacity: 0.7;" id="divLinea">
  </div>
<a id="divContra" style="font-style: italic;color: "  href="Controlador/recuperar.php" >¿Olvido su Contraseña?</a>
<style type="text/css">
  #pos{
      margin-top: -45px; left:480px;
      font-weight: bold;
      text-align:center;
      font-size: 20px;
  }
 .input{
    border-color:;
  }
  .input:hover{
    border-color: blue;
  }
.fa-eye-slash{
  color: white;
}

.boton{
  background-color: #7F3CE7;
  border-radius: 25%;
  margin-top: 0.5%;
  margin-left: -15%;
  border-color: #7F3CE7;
}

.boton:hover{
  background-color: #722BDE;
}
</style>
<center>
  <div id="divfrase">
    <h2>ABGS se preocupa por tí, es por eso que aquí encontrarás la mejor manera de controlar el rendimiento de tus estudiantes. </h2>
  </div>

  <div id="divimg">
    <img style="width: 250px; color: transparent;" src="../ABGS/Imagenes/prof.jpg">
  </div>

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




























