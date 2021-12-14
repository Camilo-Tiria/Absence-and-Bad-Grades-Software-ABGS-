 <?php 
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <link rel="stylesheet"  href="estilos1.css">
  <link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="EstiloVistas.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />

  <!-- SWEETALERT 1
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-
      sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
  function mostrarPassword(){
    var cambio = document.getElementById("usuPassword");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  function mostrarPasswordNueva(){
    var cambio = document.getElementById("passnueva");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    } 
  } 
</script>

<body background= "../Imagenes/FOL11.jpg" style="background-repeat:no-repeat;background-position:absolute;background-size: cover">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</body>
<title>CAMBIAR CONTRASEÑA</title>
<body>
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
</body>

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
 margin-top: -6.6%;
 margin-left: 89.8%;
 border-color: #7F3CE7;
}
.boton:hover{
 background-color: #722BDE;
}
    * {
 box-sizing: border-box;
}
body {
 background:  ;
 color: white;
 font-family: Time-new-Roman;
}
form {
 width: 350px;
 margin: auto;
 background: #ddd;
 padding: 11px;
 margin-top: 1px;
 color: black;
 border: 1px solid black;
 font-family: Time-new-Roman;
}
label, input,select {
 width: 100%;
 display: block;
 font-size: 0.8em;
}
input, select {
 padding: -1px;
 margin-bottom:2px;
}
input[type="submit"] {
 width: 40%;
 margin: auto;
 background: #333;
 color: white;
 border: none;
 cursor: pointer;
}
label, input,select {
 font-size: 0.8em;
 font-family: Time-new-Roman;
</style>
</head>
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
    <li><a href="mapeo.php">Información&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✓</a></li>
    <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li></tr>
    <tr>
    <td>&nbsp;</td></tr>
    <tr>  
    <td>&nbsp;</td></tr>
    </nav>
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

     <form style="margin-top: 10%;border-radius: 20px" method="post">
      <?php
        if(isset($_POST['editar'])){
           require "../Modelo/conexionBasesDatos.php";
           $objConexion=Conectarse();

           $passActual=$objConexion->real_escape_string($_POST['passActual']);
           $pass1=$objConexion->real_escape_string($_POST['pass1']);
           $pass2=$objConexion->real_escape_string($_POST['pass2']);

           $passActual=hash('sha512', $passActual);
           $pass1=hash('sha512', $pass1);
           $pass2=hash('sha512', $pass2);

           $sql=$objConexion->query("SELECT usuPassword from usuario Where Correo_SENA='".$_SESSION['user']."'");
           $row=$sql->fetch_array();

          if($row['usuPassword']==$passActual){

            if($pass1==$pass2){
              $update=$objConexion->query("UPDATE usuario SET usuPassword='$pass1' WHERE Correo_SENA='".$_SESSION['user']."'");
              if($update){
              echo "<script> swal.fire({
                   title: '¡GENIAL!',
                   text: '¡La contraseña ha sido actualizada! Inicie sesión nuevamente',
                   icon: 'success',
                    }).then(function(){
                        window.location.href='/Proyecto_SENA/ABGS/?x=3';
                    });
                     </script>";            
                   }   
            }
            else{
                echo "<script> swal.fire({
                   title: '¡ERROR!',
                   text: '¡Las dos contraseñas no coinciden!',
                   icon: 'error',
                   });</script>";            
                }   
           }
            else{
             /*echo "<script> swal({
                 title: '¡ERROR!',
                 text: '¡La contraseña actual no coincide!',
                 type: 'error',
                 });</script>";*/
                  echo"<script> 
                       Swal.fire({
                       title: 'ERROR',
                       text: 'La contraseña actual no coincide',
                       icon: 'error',})
                      ;</script>";

              }
        }
      ?>
      <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬CAMBIAR CONTRASEÑA✬</td></center>

    <label for="">Contraseña Actual:</label>
    <td><label for="validar"></label>
    <input title="Contraseña Actual" required placeholder="**********" name="passActual" type="password" maxlength= "16" id="usuPassword" size="40" /></td>
    <button id="show_password" class="boton" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>

    <label for="">Nueva Contraseña:</label>
    <td><label for="passnueva"></label>
    <input required name="pass1" type="password" id="passnueva" size="40" minlength="8" maxlength="16" pattern="(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ].*" title="Debe tener al menos una mayúscula, una minúscula y un dígito" 
    placeholder="**********"  /></td>
    <button id="show_password" class="boton" type="button" onclick="mostrarPasswordNueva()"> <span class="fa fa-eye-slash icon"></span> </button>

    <label for="">Repita contraseña:</label>
    <td><label for="pass2"></label>
    <input title="Nueva Contraseña" required  name="pass2" type="password" id="pass2" maxlength= "30"size="40" /></td><br>
    <input type="submit" value="Actualizar contraseña" name="editar">
    </form>
</body>
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div> 
<div class="divbutton1">
<button  class="bto"><a style="text-decoration: none;" href="javascript:history.back()"  ><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
<html>