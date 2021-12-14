<?php  
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
 
$N_doc=$_GET["N_doc"];
 require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM aprendiz WHERE N_doc='$N_doc'");
$aprendiz=mysqli_fetch_array($actualizar);

$sql1 = "select Nom_Res, Code_Res , Area , Trimestre from r_aprendizaje where Area = 'Inglés' and Trimestre = 'I' ";
$sql2 = "select Num_doc , NombresI, ApellidosI , Area from instructor WHERE Area= 'Inglés'  ";

$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon"> 
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOTAS INGLÉS</title>
<body>
<body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
</body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
<style type="text/css">
 * {
  box-sizing: border-box;
}
body {
  background:  ;
  color: white;
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
  font-size: 0.9em;
}
input, select {
  padding: 2px;
  margin-bottom:5px;
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
label, input,select {
  font-size: 0.9em;
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
</i>
<body>
<body>
  <form style="margin-top: 90px;border-radius: 20px" id="form1" name="form1" method="post" action="AgregarNota.php">

    <center><td colspan="2" align="center" bgcolor="GRAY" style="color: white">✬AGREGAR NOTA INGLÉS✬</td></center></tr><tr>

    <td align="right" bgcolor="#EAEAEA">Instructor:</td>
    <td><label for="INSTRUCTOR_Num_doc"></label>
    <select title="Instructor encargado/Técnico" required name="INSTRUCTOR_Num_doc" id="INSTRUCTOR_Num_doc" style="width:325px">
          <?php
          while ($INSTRUCTOR_Num_doc = $resultado2->fetch_object()) {
          ?>
            <option value="<?php echo $INSTRUCTOR_Num_doc->Num_doc ?>"><?php echo $INSTRUCTOR_Num_doc->NombresI?></option>
          <?php
          }
          ?>
    </select><tr>

    <td align="right" bgcolor="#EAEAEA">N°_Aprendiz:</td>
    <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
    <td><label for="N_doc"></label>
    <input title="N_doc" required name="N_doc" type="int" id="N_doc" value="<?php echo $N_doc;?>"size="40" /></td></tr><tr>

    <td width="37%" align="right" bgcolor="#EAEAEA">R_Aprendizaje:</td>
    <td><label for="R_APRENDIZAJE_Code_Res"></label>
    <select title="R_Aprendizaje" required name="R_APRENDIZAJE_Code_Res" id="R_APRENDIZAJE_Code_Res" style="width:325px">
            <?php
            while ($R_APRENDIZAJE_Code_Res = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $R_APRENDIZAJE_Code_Res->Code_Res ?>"><?php echo $R_APRENDIZAJE_Code_Res->Nom_Res ?></option>
            <?php
            }
            ?>
    </select><tr>

    <td align="right" bgcolor="#EAEAEA">Área:</td>
    <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
    <td><label for="Area"></label>
    <select title="Area" required name="Area" id="Area" type="enum" size="0" style="width:325px">
            <option value="Inglés">Inglés</option>
    </select></td></td>

    <td><label for="Nota">Nota:</label>
    <select title="Nota" required name="Nota" id="Nota" type="enum" size="0" style="width:325px">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
    </select></td></tr><tr>

    <td align="right" bgcolor="#EAEAEA">Trimestre:</td>
    <td><label for="Area"></label>
    <select title="Trimestre" required name="Trimestre" id="Trimestre" type="enum" size="0" style="width:325px">
            <option value="I">I</option>
    </select></td></td><br>
    
<div class="divbutton1">
<button class="bto"><a href='javascript:history.back()'class="fas fa-arrow-left fa-2x"></a></button>
</div>
<td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Agregar" /></td>
</tr>
</table>
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
</body>
</html>






