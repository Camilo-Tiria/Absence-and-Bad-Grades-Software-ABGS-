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

$sql="SELECT * from inasistencia";
$sql1 = "select Num_doc , NombresI, ApellidosI   from instructor where Area= 'Técnico' and EstadoInstructor_idEstadoInstructor = 1";

$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">   
</body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASISTENCIA PROMOVER</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body><body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
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
  font-size: 0.9em;
   font-family: Time-new-Roman;
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
<form style="margin-top: 90px;border-radius: 20px" id="form1" name="form1" method="post" action="AgregarInasistencia.php"><tr>

    <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white">✬AGREGAR ASISTENCIA PROMOVER✬</td></center><tr><br><tr><tr>

    <td align="right" bgcolor="#EAEAEA">N°_Aprendiz:</td>
    <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
    <td><label for="N_doc"></label>
    <input title="N_doc" required name="N_doc" type="int" id="N_doc" value="<?php echo $N_doc;?>"size="40" /></td></tr></tr>

    <td align="right" bgcolor="#EAEAEA">Fecha:</td>
    <td><label for="Fecha_Inas"></label>
    <input type="datetime" name="Fecha_Inas" step="1" min="2013-01-01T00:00Z" max="2013-12-31" value="<?php echo date("Y-m-d");?>"></td></td><tr><tr>

    <td align="right" bgcolor="#EAEAEA">Observaciones:</td>
    <td><label for="Observaciones"></label>
    <select title="Observaciones" required name="Observaciones" id="Observaciones" type="enum" size="0" style="width:325px">
            <option value="Tarde">Tarde</option>
            <option value="Falta">Falta</option>
            <option value="Asiste">Asiste</option>
            <option value="Retirado">Retirado</option>
            <option value="Excusa">Excusa</option>
    </select></td><tr>

    <td align="right" bgcolor="#EAEAEA">Área:</td>
    <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
    <td><label for="Area"></label>
    <select title="Area" required name="Area" id="Area" type="enum" size="0" style="width:325px">
            <option value="Promover">Promover</option>
    </select></td></td>

    <td align="right" bgcolor="#EAEAEA">Trimestre:</td>
    <select title="Trimestre" required name="Trimestre" id="Trimestre" type="enum" size="0" style="width:325px">
            <option value="VI">VI</option>
    </select></td>

    <label for="">Instructor Técnico:</label>
    <select title="Instructor encargado/Técnico" required name="Instruc_Tecnico" id="Instruc_Tecnico" style="width:325px">
          <?php
          while ($Instruc_Tecnico = $resultado1->fetch_object()) {
          ?>
            <option value="<?php echo $Instruc_Tecnico->Num_doc ?>"><?php echo $Instruc_Tecnico->NombresI?></option>
          <?php
          }
          ?>
    </select><tr></td><BR>

<div class="divbutton1">
<button class="bto"><a href='javascript:history.back()'class="fas fa-arrow-left fa-2x"></a></button>
</div>
<td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" onclick="mensaje()" value="Registrar" /></td>
</tr>
</table>
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
</body>
</html>