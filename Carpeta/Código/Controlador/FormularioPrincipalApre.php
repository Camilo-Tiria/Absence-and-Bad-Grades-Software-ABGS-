<?php  
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

$sql = "select * from usuario";

$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<title>FORMULARIO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="estilos.css" />
<script>
function comprobarClave(){
    usuPassword = document.f1.usuPassword.value
    clvt = document.f1.clvt.value

    if (usuPassword == clvt)
       alert("Las claves Coinciden, continua con el proceso...")
    else
       alert("Las claves no Coinciden, intentalo de nuevo...")
}
</script>
</head>

<body>
<div id="contenedor">
<font face="Times New Roman" size="6">Registre su usuario </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img style="height: 45px;" src="../Imagenes/Logo2.png">
<form action="AgregarUsuApre.php" name="f1" method="post" >
<ul> 
<li class="izquierda">
  <label class="titulo" for="usuLogin">Email SENA  <span class="requerido">*</span></label>

  <div>
    <span class="completo">
      <input type="email" name="usuLogin" id="usuLogin" placeholder="Por ejemplo, Maria03@misena.edu.co"  
  pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{3,}$" size="30" required/>
    </span>
  </div>

  <p class="ayuda">No olvides colocar el símbolo "@"</p>
</li>

<li class="derecha">
  <label class="titulo" for="usuPassword">Contraseña<span class="requerido">*</span></label>

  <div>
    <span class="mitad">
    <input  type="password" name="usuPassword" id="usuPassword" size="20" type="" value="" required=""/>
    </span>

    <span class="mitad">
    <input type="password" name="clvt" size="20" type="" value="" required=""/> 
      <label for="clvt">Repite la Contraseña</label>
    </span>
  </div>
  <input  style="margin-left: 285px;background: #353535;opacity: 50%; color: white;" type="button" value="Comprobar Contraseña" onClick="comprobarClave()" >
</li>
<li class="botones" >
  <input  id="alta" type="submit" value="Continuar &rarr;" />
</li>
</ul>
</form>
</div>
</body>
</html>