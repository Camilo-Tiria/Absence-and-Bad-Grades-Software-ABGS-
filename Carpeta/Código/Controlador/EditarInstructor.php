<?php
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

$sql = "select idTipoInstructor , TipoInstructor from tipoinstructor ";
$sql3 = "select  idEstadoInstructor , EstadoInstruc from estadoinstructor ";

$resultado = $objConexion->query($sql);
$resultado3 = $objConexion->query($sql3);

?>
<style >
.boton {
   padding: 10px;
   margin-left: 1100px;
   text-decoration: none;
   border-radius: 100px;
   background-color: gray;
   color: white;
}
</style>
<a href="vistaPrincipalInstructor.php?pg3=listarInstructores1" class="boton">VOLVER</a>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Editar Instructor</title>
</head>
 <body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
<body>
  <form id="form1" name="form1" method="post" action="ModificarInstructor.php">
      <center>
         <table width="33%" border="3" align="center">
<body>
    <tr>
      <td colspan="2" align="center" bgcolor="GRAY" style="color:white">MODIFICAR INSTRUCTOR</td>
    </tr>
    <tr>
<td  align="right" bgcolor="#EAEAEA">Tipo :</td>
<input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
        <td><label  for="TipoInstructor_idTipoInstructor"></label>
          <select required name="TipoInstructor_idTipoInstructor" id="TipoInstructor_idTipoInstructor" size="0" style="width:318px" title="Tipo en el que se encuentra el instructor">
            <option  value="0">Seleccione</option>
            <?php
            while ($TipoInstructor_idTipoInstructor = $resultado->fetch_object()) {
            ?>
              <option value="<?php echo $TipoInstructor_idTipoInstructor->idTipoInstructor ?>"><?php echo $TipoInstructor_idTipoInstructor->TipoInstructor ?></option>
            <?php
            }

            ?>
            </tr>
            <br>
            <tr>
               <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Tip_doc:</td>
        <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
        <td><label for="Tip_doc"></label>
          <select title="Tip_doc" required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:318px">
            <option value="0">Seleccione</option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select></td>
     </tr>
    <br>
    <tr>
         <td align="right" bgcolor="#EAEAEA">Nombres</td>
                  <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="NombresI"></label>
              <input title="NombresI" required name="NombresI" type="text" id="NombresI" value="<?php echo $NombresI;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Apellidos</td>
                  <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="ApellidosI"></label>
              <input title="ApellidosI" required name="ApellidosI" type="text" id="ApellidosI" value="<?php echo $ApellidosI;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Telefono</td>
                  <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Telefono"></label>
              <input title="Telefono" required name="Telefono" type="int" id="Telefono" value="<?php echo $Telefono;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Direccion</td>
                  <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Direccion"></label>
              <input title="Direccion" required name="Direccion" type="text" id="Direccion" value="<?php echo $Direccion;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Correo_SENA</td>
                  <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Correo_corp"></label>
              <input title="Correo_corp" required name="Correo_corp" type="email" id="Correo_corp" value="<?php echo $Correo_corp;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Correo_Pl</td>
                  <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
             <td><label for="Correo_Pl"></label>
              <input title="Correo_Pl" required name="Correo_Pl" type="email" id="Correo_Pl" value="<?php echo $Correo_Pl;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Estado</td>
       <input type="hidden" name="Num_doc" value="<?php echo $_REQUEST['Num_doc'] ?>">
      <td><label for=" EstadoInstructor_idEstadoInstructor "></label>


        <select title="EstadoInstructor_idEstadoInstructor" required name="EstadoInstructor_idEstadoInstructor" id="EstadoInstructor_idEstadoInstructor" style="width:316px">
          <option value="0">Seleccione</option>
          <?php
          while ($EstadoInstructor_idEstadoInstructor = $resultado3->fetch_object()) {
          ?>
            <option value="<?php echo $EstadoInstructor_idEstadoInstructor->idEstadoInstructor ?>"><?php echo $EstadoInstructor_idEstadoInstructor->EstadoInstruc?></option>
            
          <?php
          }

          ?>
        </select>
        <tr>
  <br>
   <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Guardar Cambios" /></td>
        </tr>                               
          </table>
      </center>
  </form>
</body>
<html>
     
    
    