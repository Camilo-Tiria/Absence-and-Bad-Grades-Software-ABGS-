<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");

$N_doc=$_GET["N_doc"];
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM notas WHERE N_doc='$N_doc'");
$notas=mysqli_fetch_array($actualizar);
$N_doc = $notas["N_doc"];
$R_APRENDIZAJE_Code_Res = $notas["R_APRENDIZAJE_Code_Res"];
$Area = $notas["Area"];
$Trimestre = $notas["Trimestre"];
$INSTRUCTOR_Num_doc = $notas["INSTRUCTOR_Num_doc"];

$Nota = $notas["Nota"];

$sql1 = "select Nom_Res, Code_Res , Area , Trimestre from r_aprendizaje where Area = 'Técnico' and Trimestre = 'VII' ";
$sql2 = "select Num_doc , NombresI, ApellidosI , Area from instructor WHERE Area= 'Técnico'  ";


$resultado3 = $objConexion->query($sql2);
$resultado2 = $objConexion->query($sql1);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ENVIAR MENSAJE</title>
<body>
<td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
</body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet"  href="estilos1.css">
<link rel="stylesheet" href="estiloprincipalaprendiz.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
</head>
<style type="text/css">
label, input,select {
  font-size: 0.9em;
  font-family: Time-new-Roman;
}
#divPiePagina {
  position:absolute;
  left:0px;
  top:87%;
  height:13%;
  width: 100%;
  z-index:1;
background:linear-gradient(30deg, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );
     font-family: Time-new-Roman;

  }
</style>
 <nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO ⟰ </a>
    <li><a href="vistaprincipalNotas.php?pg2=programas">MIS NOTAS ︾</a></li>
    <li><a href="vistaPrincipalMisAsistencias.php?pg2=programas1">ASISTENCIAS ︾</a></li>
    <li><a href="">logo ⟰</a></li>
    <li><a href="vistaPrincipalInstructores.php?pg2=Instructores">INSTRUCTORES ︾</a></li>
    <li><a href="VistaResultados.php?pg2=programas3">R_APRENDIZAJE ︾</a></li>
  </ul>
  </nav> 
<nav class="perfil"><ol>
    <li><center><i href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERFIL︙</i></center>
    <ol><li><a href="perfil.php?=Correo_SENA=<?=$_SESSION['user']?>">Mi Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⍈</a></li>
     <li><a href="mapeo.php">Información&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✓</a></li>
    <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li></tr>
    <tr>
    <td>&nbsp;</td>
    </tr><tr>  
    <td>&nbsp;</td>
    </tr>
    </nav>
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body><br><br><br>

  <form style="margin-top: 1%;font-family: Time-new-Roma;border-radius: 20px;background: #ddd;" id="form1" name="form1" method="post" action="AgregarMensaje.php">

        <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬ENVIAR MENSAJE✬</td></center>

        <label for="">N_documento:</label>
        <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label for="N_doc"></label>
        <input title="N_doc"  maxlength="10" required name="N_doc" type="text" id="N_doc" value="<?php echo $N_doc;?>"size="40" style="width:319px "/></td>

        <label for="">R_Aprendizaje:</label>
        <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label  for="R_APRENDIZAJE_Code_Res"></label>
        <select required name="R_APRENDIZAJE_Code_Res"    id="R_APRENDIZAJE_Code_Res" size="0" style="width:325px" title="Ficha en la que se encuentra el aprendiz">         
        <?php
        while ($R_APRENDIZAJE_Code_Res = $resultado2->fetch_object()) {
        ?>
        <option value="<?php echo $R_APRENDIZAJE_Code_Res->Code_Res ?>"><?php echo $R_APRENDIZAJE_Code_Res->Nom_Res ?></option>
        <?php
        }
        ?>
        </select>

        <td align="right" bgcolor="#EAEAEA">Área:</td>
        <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label for="Area"></label>
        <select title="Area" required name="Area" id="Area" type="enum" size="0" style="width:325px">
            <option value="Técnico">Técnico</option>
        </select></td>
        </td>

        <td align="right" bgcolor="#EAEAEA">Trimestre:</td>
        <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label for="Area"></label>
        <select title="Trimestre" required name="Trimestre" id="Trimestre" type="enum" size="0" style="width:325px">
            <option value="VII">VII</option>
        </select></td></td>

        <td align="right" bgcolor="#EAEAEA">Instructor:</td>
        <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label for="INSTRUCTOR_Num_doc"></label>
        <select title="Instructor encargado/Técnico" required name="INSTRUCTOR_Num_doc" id="INSTRUCTOR_Num_doc" style="width:325px">
          <?php
          while ($INSTRUCTOR_Num_doc = $resultado3->fetch_object()) {
          ?>
            <option value="<?php echo $INSTRUCTOR_Num_doc->Num_doc ?>"><?php echo $INSTRUCTOR_Num_doc->NombresI?></option>
            
          <?php
          }

          ?>
        </select>

        <td align="right" bgcolor="#EAEAEA">Nota:</td>
        <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label for="Nota"></label>
        <select title="Nota" required name="Nota" id="Nota" type="enum" size="0" style="width:325px">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
        </select></td></td>

        <label for="">Mensaje:</label>
       <td><label for="Mnesaje"></label>
               <TEXTAREA title="Mensaje" required name="Mensaje" id="Mensaje" size="40" style="width:319px "/></TEXTAREA><br><br>

       <input type="submit" name="submit" >
</form>
</body>
    <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div> 
<div class="divbutton1">
<button  class="bto"><a href='javascript:history.back()' ><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
<html>

            
           
