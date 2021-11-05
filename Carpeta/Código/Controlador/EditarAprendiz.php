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
$Estado_idEstado = $aprendiz["Estado_idEstado"];
$PROGRAMA_Ficha_carac =$aprendiz ["PROGRAMA_Ficha_carac"];
$Tip_doc= $aprendiz ["Tip_doc"];
$Nombres= $aprendiz["Nombres"];
$Apellidos= $aprendiz["Apellidos"];
$Tel_apre= $aprendiz ["Tel_apre"];
$Correo_SENA= $aprendiz["Correo_SENA"];
$Correo_Pl= $aprendiz ["Correo_Pl"];


$sql2 ="select Ficha_carac from programa ";
$sql3 ="select idEstado, Nombre from estado ";


$resultado2 = $objConexion->query($sql2);
$resultado3 = $objConexion->query($sql3);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
   </body>

<title>EDITAR</title>

<body>
  
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
<link rel="stylesheet"  href="estilos1.css">
<link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />

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

label, input,select {

 
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
<title>Formulario Editar Programa</title>
</head>
<body><br>

  <form style="margin-top: 60px;border-radius: 20px" id="form1" name="form1" method="post" action="ModificarAprendiz.php">

        <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬EDITAR APRENDIZ✬</td></center>

      <label for="">Ficha:</label>
                <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label  for="PROGRAMA_Ficha_carac"></label>
          <select required name="PROGRAMA_Ficha_carac"    id="PROGRAMA_Ficha_carac" size="0" style="width:325px" title="Ficha en la que se encuentra el aprendiz">
                    <option value="<?php echo $PROGRAMA_Ficha_carac;?>"><?php echo $PROGRAMA_Ficha_carac;?></option>
            <?php
            while ($PROGRAMA_Ficha_carac = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?>"><?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?></option>
            <?php
            }

            ?>
          </select>

      <label for="">Tip_documento:</label>
       <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label for="Tip_doc"></label>
          <select title="Tip_doc"  required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:325px">
        <option value="<?php echo $Tip_doc;?>"><?php echo $Tip_doc;?></option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select></td>



  <label for="">Nombres:</label>
                     <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Nombres"></label>
              <input title="Nombres" required name="Nombres" type="text" maxlength= "20" id="Nombres" value="<?php echo $Nombres;?>"size="40" /></td>


       <label for="">Apellidos:</label>
         <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Apellidos"></label>
              <input title="Apellidos" required name="Apellidos" maxlength= "40" type="text" id="Apellidos" value="<?php echo $Apellidos;?>"size="40" /></td>


        <label for="">Teléfono:</label>
                             <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Tel_apre"></label>
              <input title="Tel_apre" required name="Tel_apre" type="int" maxlength= "10" id="Tel_apre" value="<?php echo $Tel_apre;?>"size="40" /></td>



           <label for="">Correo_SENA:</label>
                              <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Correo_SENA"></label>
              <input title="Correo_SENA"  maxlength= "40"required name="Correo_SENA" type="email" id="Correo_SENA" value="<?php echo $Correo_SENA;?>"size="40" /></td>


      <label for="">Correo_Pl:</label>
         <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Correo_Pl"></label>
              <input title="Correo_Pl" required name="Correo_Pl" type="email" id="Correo_Pl" maxlength= "40" value="<?php echo $Correo_Pl;?>"size="40" /></td>

            <label for="">Estado:</label>
              <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
      <td><label for="Estado_idEstado"></label>


        <select title="Estado_idEstado" required name="Estado_idEstado" id="Estado_idEstado" style="width:326px">
          <option value="<?php echo $Estado_idEstado;?>"><?php echo $Estado_idEstado;?></option>
          <?php
          while ($Estado_idEstado = $resultado3->fetch_object()) {
          ?>
            <option value="<?php echo $Estado_idEstado->idEstado ?>"><?php echo $Estado_idEstado->Nombre?></option>
            
          <?php
          }

          ?>
        </select>

<br>        
      
      <input type="submit" name="submit">
    </form>
</body>
        <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div> 
<div class="divbutton1">
<button  class="bto"><a href="javascript:history.back()"><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
<html>