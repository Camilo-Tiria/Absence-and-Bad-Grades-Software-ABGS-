<?php 
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
$Num_doc=$_GET["Num_doc"];
 require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM instructor WHERE Num_doc='$Num_doc'");
$instructor=mysqli_fetch_array($actualizar);

$TipoInstructor_idTipoInstructor = $instructor["TipoInstructor_idTipoInstructor"];
$EstadoInstructor_idEstadoInstructor =$instructor["EstadoInstructor_idEstadoInstructor"];
$Tip_doc= $instructor["Tip_doc"];
$NombresI= $instructor ["NombresI"];
$ApellidosI= $instructor ["ApellidosI"];
$Telefono= $instructor ["Telefono"];
$Direccion= $instructor ["Direccion"];
$Correo_corp= $instructor ["Correo_corp"];
$Correo_Pl= $instructor ["Correo_Pl"];
$Area= $instructor ["Area"];


$sql = "select idTipoInstructor , TipoInstructor from tipoinstructor ";
$sql2 = "select  idEstadoInstructor , EstadoInstruc from estadoinstructor ";

$resultado = $objConexion->query($sql);
$resultado2 = $objConexion->query($sql2);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDITAR INSTRUCTOR</title>
<body>
  
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
<link rel="stylesheet"  href="estilos1.css">
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="EstiloVistas.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
<style type="text/css">
ol a{
    text-decoration:none;
    display:inline-block;
    padding:0;
    width:110px;
    height:30px;
    border:1px solid #000;
    color:#fff;
    background-color:#000;
     font-family: Time-new-Roman;
    }

    nav li:hover>ol{
      display:block;
      position:absolute;
      top:20%;
      left:88.3%;
    list-style-type: none;

} 

    * {
  box-sizing: border-box;
}
body {
  background:  ;
  color: white;
  font-family: Time-new-Roman;}

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
  width: 4
  0%;
  margin: auto;
  background: #333;
  color: white;
  border: none;
  cursor: pointer;
}
abel, input,select {

 
  font-size: 0.8em;
  font-family: Time-new-Roman;
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
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Editar Instructor</title>
</head>
<body>

     <form style="margin-top: 4%;" id="form1" name="form1" method="post" action="ModificarInstructor.php">


        <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬EDITAR INSTRUCTOR✬</td></center>

      <label for="">Tipo Instructor:</label>
               <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
                <td><label  for="TipoInstructor_idTipoInstructor"></label>
          <select required name="TipoInstructor_idTipoInstructor" readonly="readonly" id="TipoInstructor_idTipoInstructor" size="0" style="width:325px" title="Tipo en el que se encuentra el instructor">
                  <option value="<?php echo $TipoInstructor_idTipoInstructor;?>"><?php echo $TipoInstructor_idTipoInstructor;?></option>
            <?php
            while ($TipoInstructor_idTipoInstructor = $resultado->fetch_object()) {
            ?>
              <option value="<?php echo $TipoInstructor_idTipoInstructor->idTipoInstructor ?>"><?php echo $TipoInstructor_idTipoInstructor->TipoInstructor ?></option>
            <?php
            }

            ?>
          </select></td>

      <label for="">Tip_documento:</label>
       <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
        <td><label for="Tip_doc"></label>
          <select title="Tip_doc"  required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:325px">
            <option value="<?php echo $Tip_doc;?>"><?php echo $Tip_doc;?></option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select></td>

  <label for="">Nombres:</label>
              <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="NombresI"></label>
              <input title="NombresI" required name="NombresI" type="text" maxlength= "30" id="NombresI" value="<?php echo $NombresI;?>"size="40" /></td>
           


       <label for="">Apellidos:</label>
             <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="ApellidosI"></label>
              <input title="ApellidosI" required name="ApellidosI" type="text" maxlength= "30" id="ApellidosI" value="<?php echo $ApellidosI;?>"size="40" /></td>
       


        <label for="">Teléfono:</label>
              <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Telefono"></label>
              <input title="Telefono" required name="Telefono" type="int" id="Telefono" maxlength= "10" value="<?php echo $Telefono;?>"size="40" /></td>
           

           <label for="">Direccion:</label>
            <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Direccion"></label>
              <input title="Direccion" required name="Direccion" type="text" id="Direccion" maxlength= "30"value="<?php echo $Direccion;?>"size="40" /></td>
            
             <label for="">Correo_SENA:</label>
             <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Correo_corp"></label>
              <input title="Correo_corp" required name="Correo_corp" type="email"  maxlength= "40" id="Correo_corp" value="<?php echo $Correo_corp;?>"size="40" /></td>
            
      <label for="">Correo_Pl:</label>
         <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Correo_Pl"></label>
              <input title="Correo_Pl" required name="Correo_Pl" type="email" id="Correo_Pl" maxlength= "40" value="<?php echo $Correo_Pl;?>"size="40" /></td>
          

            <label for="">Estado:</label>
              <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">


        <select title="EstadoInstructor_idEstadoInstructor" readonly="readonly" required name="EstadoInstructor_idEstadoInstructor" id="EstadoInstructor_idEstadoInstructor" style="width:325px">
         <option value="<?php echo $EstadoInstructor_idEstadoInstructor;?>"><?php echo $EstadoInstructor_idEstadoInstructor;?></option>
          <?php
          while ($EstadoInstructor_idEstadoInstructor = $resultado2->fetch_object()) {
          ?>
            <option value="<?php echo $EstadoInstructor_idEstadoInstructor->idEstadoInstructor ?>"><?php echo $EstadoInstructor_idEstadoInstructor->EstadoInstruc?></option>
            
          <?php
          }

          ?>
        </select></tr>
          <label for="">Area:</label>
          <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
          <td><label for=" Area "></label>
            <select title="Area"  required name="Area" disabled ="disabled" id="Area" type="enum" size="0" style="width:325px">
             <option value="<?php echo $Area;?>"><?php echo $Area;?></option>
            <option value="Promover">Promover</option>
            <option value="Inglés">Inglés</option>
            <option value="Técnico">Técnico</option>
              <option value="C.Física">C.Física</option>

      
         
         
      <input type="submit" name="submit">


    </form>
</body>
        <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div> 
<div class="divbutton1">
<button  class="bto"><a style="text-decoration: none;" href="javascript:history.back()"  ><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>


<html>