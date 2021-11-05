<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");

$Ficha_carac=$_GET["Ficha_carac"];
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM programa WHERE Ficha_carac='$Ficha_carac'");
$programa=mysqli_fetch_array($actualizar);
$Nom_Program = $programa["Nom_Program"];
$Area = $programa["Area"];
$Fecha_Ingr= $programa["Fecha_Ingr"];
$Tipo_Formacion= $programa["Tipo_Formacion"];
$Jornada= $programa["Jornada"];
$Trimestres= $programa["Trimestres"];
$Modalidad= $programa ["Modalidad"];

$sql = "select * from programa ";
$resultado = $objConexion->query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDITAR FICHA</title>
<body>
  
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet"  href="estilos1.css">
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
</head>
<style type="text/css">
  
label, input,select {

 
  font-size: 0.9em;
  font-family: Time-new-Roman;
</style>
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
<title>Formulario Editar Programa</title>
</head>
<body><br>
     <br>
     <br>

  <form style="margin-top: 1%;font-family: Time-new-Roma;border-radius: 20px;background: #ddd;" id="form1" name="form1" method="post" action="ModificarPrograma.php">

        <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬EDITAR FICHA✬</td></center>


      <label for="">Nombre Programa:</label>
      <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
      <td><label for="Nom_Program"></label>
               <input title="Nom_Program"  maxlength="10" required name="Nom_Program" type="text" id="Nom_Program" value="<?php echo $Nom_Program;?>"size="40" style="width:319px "/></td>


      <label for="">Area:</label>
      <input type="hidden"  name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
             <td><label for="Area"></label>
              <input title="Area" readonly="readonly" disabled ="disabled" required name="Area" type="text" id="Area" value="<?php echo $Area;?>"size="40" style="width:319px"/></td>

      <label for="">Fecha_Ingreso:</label>
      <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
                 <td><label for="Fecha_Ingr"></label>
               <input title="Fecha_Ingr"  required name="Fecha_Ingr" type="date" id="Fecha_Ingr" value="<?php echo $Fecha_Ingr;?>" size="40" style="width:318px"/></td>

      <label for="">Tipo de Formacion:</label>
      <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
          <select title="Tipo de formacion" required name="Tipo_Formacion" id="Tipo_Formacion" type="enum" size="0" value="<?php echo $Tipo_Formacion;?>" style="width:318px ">
            <option value="<?php echo $Tipo_Formacion;?>"><?php echo $Tipo_Formacion;?></option>
            <option value="Tecnología">Tecnología</option>
            <option value="Técnico">Técnico</option>
          </select>
          </td>
 <label for="">Jornada:</label>
    <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
      <select title="Jornada" required id="Jornada" name="Jornada" required="" type="enum" size="0" value="<?php echo $Jornada;?>"  style="width:318px">
        <option value="<?php echo $Jornada;?>"><?php echo $Jornada;?></option>
        <option value="Diurna">Diurna</option>
            <option value="FDS">FDS</option>
            <option value="Nocturna">Nocturna</option>
          </select></td>
          <div id="Trimestres"></div>
                
      <label for="">Modalidad:</label>
      <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
   <select title="Modalidad"  required name="Modalidad" id="Modalidad"  type="enum" size="0" value="<?php echo $Modalidad;?>"  style="width:318px">
            <option value="<?php echo $Modalidad;?>"><?php echo $Modalidad;?></option>
            <option value="Presencial">Presencial</option>
            <option value="Virtual">Virtual</option>
          </select></td>
          <br>
      <input type="submit" name="submit">
      


    </form>
</body>
        <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div> 

  <div class="divbutton1">
<button  class="bto"><a href="vistaPrincipalFichas.php?pg2=funcionesProgramas"><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>

<html>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
              $(document).ready(function(){
                recargarlista();

                $('#Jornada').change(function(){
                  recargarlista();
                });
              })
            </script>
            <script type="text/javascript">
              function recargarlista(){
                $.ajax({
                  type:"POST",
                  url: "datos.php",
                  data: "Jornada=" + $('#Jornada').val(),
                  success:function(r){
                    $('#Trimestres').html(r);
                  }
                });
              }

            </script>