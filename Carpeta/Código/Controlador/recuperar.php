<!DOCTYPE html>
<html>
<head>
  <title>RecuperarContrasena</title>
    <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <meta charset="UTF-8">
</head><center><img src="../Imagenes/LogoFondo.png"></center>
<body>
<style>
    #nombre{
        margin-left: 440px; 
        margin-top: 30px;
}
    #Correo{
        margin-left: 440px; 
        margin-top: 10px;
    }
    #boton{
        margin-left: 600px; 
        margin-top: 10px;
    }
    #fondo{
        background-color: #E5DFDE ;
    }
</style>
<div id="fondo">
<center>
<h2 style="margin-top: 160px;">Recuperar mi Contraseña</h2></center>    

<form action="mailto:Misena@gmail.com,leidi@gmail.com " method="post" enctype="text/plain">
    <div id="nombre">
  Ingrese su Nombre completo:      
  <input  required="" style="margin-left: 11px" type="text" name="Nombre" size="30" >
    </div>
    <div id="Correo">
  Ingrese su dirección de Correo: 
  <input required="" type="text" name="Dirección" size="30" placeholder="Por ejemplo, Maria03@misena.edu.co" > 
  </div>
  <div id="boton">
  <input type="submit" value="Enviar">
  </div>
</form>
</div>
</body>
</html>