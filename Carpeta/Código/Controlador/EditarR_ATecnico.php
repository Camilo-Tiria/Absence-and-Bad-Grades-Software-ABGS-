<?php  
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");

$Code_Res=$_GET["Code_Res"];
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM r_aprendizaje WHERE Code_Res='$Code_Res'");
$r_aprendizaje=mysqli_fetch_array($actualizar);
$Code_Res=$r_aprendizaje["Code_Res"];

$Nom_Res= $r_aprendizaje ["Nom_Res"];

$sql = "select * FROM r_aprendizaje ";
$resultado = $objConexion->query($sql);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  </body>
      <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDITAR R_ATÉCNICO</title>
<body>
  
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
<link rel="stylesheet"  href="estilos1.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
<style type="text/css">
#divContenedor {
  
  left:px;
  top:19px;
  width:1100px;
  height:500px;
  z-index:1;
  margin:0 auto;
}
#divMenu a{
  color:#E9ECEC;
  text-decoration: none;
}
#divMenu a:hover{
  color:#C82D2D;
}
#divMenu {
  position:absolute;

  left:40px;
  top:125px;
  width:173px;
  height:500px;
  z-index:0;
  background-image: url(https://media.giphy.com/media/8mz9YJidZMGXndg6eH/giphy.gif);

}

  #divContenido {
    position:absolute;
    left:180px;
    top:50px;
    width:1120px;
    height:450px;
    z-index:0;
    overflow:auto;
    }
#divPiePagina {
  position:absolute;
  left:0px;
  top:565.4px;
  height:59px;
  width: 1279px;
  z-index:1;
background:linear-gradient(30deg, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );


  }
  #divbutton1 {
  position:absolute;
  left:80px;
  top:170px;
  width:69px;
  height:20px;
  box-shadow:  5px 5px 5px black; 
}
 
    * {
  box-sizing: border-box;
}
body {
  background:  ;
  color: white;
  font-family: sans-serif;
}

form {
  width: 350px;
  margin: auto;
  background: #ddd;
  padding: 11px;
  margin-top: 1px;
  color: black;
  border: 1px solid black;

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
  width: 4
  0%;
  margin: auto;
  background: #333;
  color: white;
  border: none;
  cursor: pointer;
}

</style>
</head>
 <nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO ⟰</a>
    <li><a href="vistaPrincipalFichas.php?pg2=frmPrograma">FICHAS ︾</a></li>
    <li><a href="vistaPrincipalAprendiz.php?pg3=frmAgregarAprendiz">APRENDICES ︾</a></li>
    <li><a href="">logo︾</a></li>
    <li><a href="vistaPrincipalInstructor.php?pg3=listarInstructores">INSTRUCTORES ︾</a></li>
    <li><a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas">REGISTROS ︾  </a></li>
  </ul>
  </nav> 
  
<nav class="perfil"><ol>

  
    <li><i href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERFIL︙</i>
      <ol><li><a href="perfil.php?=<?=$_SESSION['user']?>">Mi Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⍈</a></li>
  <li><a href="contacto.php">Contacto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;☏</a></li>
      <li><a href="listarmensajes.php">Mensajes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✉</a></li>
      <li><a href="">Notificaciones&nbsp;&nbsp;&nbsp;✓</a></li>
    
      <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li>

        </tr>

    
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>  
          <td>&nbsp;</td>
        </tr>
    </nav>

<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Editar Programa</title>
</head>
<body><br>
<form style="margin-top: 80px;" id="form1" name="form1" method="post" action="ModificarR_ATecnico.php">

        <center><td colspan="2" align="center" bgcolor="GRAY" style="color: white">****EDITAR R_APRENDIZAJE****</td></center>
      </tr>
            <td align="right" bgcolor="#EAEAEA">Codigo: </td>
            <input type="hidden" name="Code_Res" value="<?php echo $_REQUEST['Code_Res'] ?>">
                <td><label for="Code_Res"></label>
               <input title="Code_Res"  readonly="readonly" disabled ="disabled" required name="Code_Res" type="text" id="Code_Res" value="<?php echo $Code_Res;?>"size="40" /></td>
         
        </td>
      <tr>

      
        <tr>
      

      <tr>
         <td align="right" bgcolor="#EAEAEA">Nombre: </td>
              <input type="hidden" name="Code_Res" value="<?php echo $_REQUEST['Code_Res'] ?>">
                <td><label for="Nom_Res"></label>
               <input title="Nom_Res"  required name="Nom_Res" type="text" id="Nom_Res" value="<?php echo $Nom_Res;?>"size="40" /></td>
         
        </td>
        <tr>
           <td align="right" bgcolor="#EAEAEA">Area:</td>
            <input type="hidden"name="Code_Res" value="<?php echo $_REQUEST['Code_Res'] ?>">
     <td><label for="Area"></label>
           <select title="Tipo de documento del aprendiz" readonly="readonly" disabled ="disabled" required name="Area" id="Area" type="enum" size="0" style="width:325px">
          
            <option value="Inglés">Inglés</option>
          </select></td>
        </td>
          <br>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
  </form>
</body>

 <div class="divbutton1">
<button class="bto"><a href='javascript:history.back()'class="fas fa-arrow-left fa-2x"></a></button>
</div>
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
<html>
<html>