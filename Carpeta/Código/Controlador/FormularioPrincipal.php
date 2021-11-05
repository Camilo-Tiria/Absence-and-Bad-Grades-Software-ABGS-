<?php  
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

$sql = "select * from usuario";
$sql1 = "select * from roles where Nombre_rol = 'Instructor'";

$resultado = $objConexion->query($sql);
$resultado2 = $objConexion->query($sql1);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<title>REGISTRO USUARIO</title>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="estilos.css?v=<?php echo(rand()); ?>" />
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
<!--<script>
function comprobarClave(){
    usuPassword = document.f1.usuPassword.value
    clvt = document.f1.clvt.value

    if (usuPassword == clvt)
       alert("Las claves Coinciden, continua con el proceso...")
    else
       alert("Las claves no Coinciden, intentalo de nuevo...")
}
</script>-->
</head>

<body>
<div id="contenedor">
<font face="Times New Roman" size="6">Registre su usuario </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img style="height: 45px;" src="../Imagenes/Logo2.png">
<form action="AgregarUsu.php" name="f1" method="post" >
  
<ul> 
<li class="izquierda">
  <label class="titulo" for="Correo_SENA">Email SENA  <span class="requerido">*</span></label>

  <div>
    <span class="completo">
      <input type="email" name="Correo_SENA" id="Correo_SENA" placeholder="Por ejemplo, Maria03@misena.edu.co"  
  pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{3,}$" size="30" required/>
    </span>
  </div>

  <p class="ayuda">No olvides colocar el símbolo "@"</p>
</li>

<li class="derecha">
  <label class="titulo" for="usuPassword">Contraseña<span class="requerido">*</span></label>

  <div>

    <span class="mitad">

    <input ID="txtPassword" type="Password" Class="input" name="usuPassword"  pattern="(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ].*"
         title="Debe tener al menos una mayúscula, una minúscula y un dígito" placeholder="**********"  size="25"minlength="8" maxlength="16" required/>         
    </span>
     <button id="show_password" class="boton" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
<style type="text/css">
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
  border-radius: 20%;
  margin-top: 0.9%;
  margin-left: -13%;
  border-color: #7F3CE7;
}

.boton:hover{
  background-color: #722BDE;
}
}
    ul li div span label {
    display: block;
    font: normal 1.1em Time-new-Roman;
    color: #333;
  }
  label, input,select {

 
  font-size: 0.9em;
  font-family: Time-new-Roman;
}
  #contenedor {
  
  background: #F3F0F0;
  border: 1px solid silver;
  margin: 7em auto;
  padding: 1em;
  width: 768px;
  height: 280px;
  font-family: Time-new-Roman;

}
</style>
    <!--<span class="mitad">
    <input type="password" name="clvt" size="20" pattern="(?=.\d)(?=.[a-záéíóúüñ]).[A-ZÁÉÍÓÚÜÑ]."
         title="Debe tener al menos una mayúscula, una minúscula y un dígito" placeholder="****" type="password" minlength="" maxlength="16" required/> 
      <label for="clvt">Repite la Contraseña</label>
    </span>
  </div>
  
      <tr>
  <input  style="margin-left: 285px;background: #353535;opacity: 50%; color: white;" type="button" value="Comprobar Contraseña" onClick="comprobarClave()" >
</li>-->
<tr>
 
  
      <label style="margin-left: 20%; " for="">Rol:</label>
        <td><label  for="ROL_id_rol"></label>
          <select required name="ROL_id_rol" id="ROL_id_rol" size="0" style="width:20%; height: 100%;" title="Ficha en la que se encuentra el aprendiz">
            <?php
            while ($ROL_id_rol = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $ROL_id_rol->id_rol ?>"><?php echo $ROL_id_rol->Nombre_rol ?></option>
            <?php
            }

            ?>
          </select>
<br>
<br>
<li class="botones" >
  <input  id="alta" type="submit" value="Continuar &rarr;" />
</li>
</ul>
</form>
</div>

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
</style>
</body>
</html>















