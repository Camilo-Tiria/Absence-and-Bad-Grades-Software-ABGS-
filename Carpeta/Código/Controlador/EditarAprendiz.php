<?php
$N_doc=$_GET["N_doc"];
 require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM aprendiz WHERE N_doc='$N_doc'");
$aprendiz=mysqli_fetch_array($actualizar);
$Estado_idEstado = $aprendiz["Estado_idEstado"];
$PROGRAMA_Ficha_carac =$aprendiz ["PROGRAMA_Ficha_carac"];
$INSTRUCTOR_Num_doc= $aprendiz ["INSTRUCTOR_Num_doc"];
$Tip_doc= $aprendiz ["Tip_doc"];
$Nombres= $aprendiz["Nombres"];
$Apellidos= $aprendiz["Apellidos"];
$Tel_apre= $aprendiz ["Tel_apre"];
$Correo_SENA= $aprendiz["Correo_SENA"];
$Correo_Pl= $aprendiz ["Correo_Pl"];


$sql1 = "select Num_doc , NombresI, ApellidosI   from instructor ";
$sql2 ="select Ficha_carac from programa ";
$sql3 ="select idEstado, Nombre from estado ";


$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);
$resultado3 = $objConexion->query($sql3);


?>
<style>
.boton {
   padding: 10px;
   margin-left: 1100px;
   text-decoration: none;
   border-radius: 100px;
   background-color: gray;
   color: white;
}
</style>
<a href="vistaPrincipalAprendiz.php?pg3=listarProgramas1" class="boton">VOLVER</a>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Editar Aprendiz</title>
</head>
<body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
<body>
  <form id="form1" name="form1" method="post" action="ModificarAprendiz.php">
      <center>
         <table width="33%" border="3" align="center">
<body>
    <tr>
      <td colspan="2" align="center" bgcolor="GRAY" style="color:white">MODIFICAR APRENDIZ</td>
    </tr>
       <tr>
        </select></td>
        <td  align="right" bgcolor="#EAEAEA">Ficha</td>
         <input type="hidden"name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label  for="PROGRAMA_Ficha_carac"></label>
          <select required name="PROGRAMA_Ficha_carac"    id="PROGRAMA_Ficha_carac" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($PROGRAMA_Ficha_carac = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?>"><?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?></option>
            <?php
            }

            ?>
          </select>
      </tr>
            <br>
            <tr>
               <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Tip_doc:</td>
         <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
        <td><label for="Tip_doc"></label>
          <select title="Tip_doc"  required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:318px">
            <option value="0">Seleccione</option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select></td>
     </tr>
    <br>
     </tr>
      <td align="right" bgcolor="#EAEAEA">Instructor Tecnico</td>
       <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
      <td><label for="INSTRUCTOR_Num_doc"></label>


        <select title="Instructor encargado/Técnico"  readonly="readonly" disabled ="disabled" required name="INSTRUCTOR_Num_doc" id="INSTRUCTOR_Num_doc" style="width:316px">
          <option value="0">Seleccione</option>
          <?php
          while ($INSTRUCTOR_Num_doc = $resultado1->fetch_object()) {
          ?>
            <option value="<?php echo $INSTRUCTOR_Num_doc->Num_doc ?>"><?php echo $INSTRUCTOR_Num_doc->NombresI?></option>
            
          <?php
          }

          ?>
        </select>
        <tr>
          <br>
    <tr>
         <td align="right" bgcolor="#EAEAEA">Nombres</td>
                  <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Nombres"></label>
              <input title="Nombres" required name="Nombres" type="text" id="Nombres" value="<?php echo $Nombres;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Apellidos</td>
                  <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Apellidos"></label>
              <input title="Apellidos" required name="Apellidos" type="text" id="Apellidos" value="<?php echo $Apellidos;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Telefono</td>
                  <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Tel_apre"></label>
              <input title="Tel_apre" required name="Tel_apre" type="int" id="Tel_apre" value="<?php echo $Tel_apre;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Correo_SENA</td>
                  <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Correo_SENA"></label>
              <input title="Correo_SENA" readonly="readonly" disabled ="disabled" required name="Correo_SENA" type="email" id="Correo_SENA" value="<?php echo $Correo_SENA;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
         <td align="right" bgcolor="#EAEAEA">Correo_Pl</td>
                  <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
             <td><label for="Correo_Pl"></label>
              <input title="Correo_Pl" required name="Correo_Pl" type="email" id="Correo_Pl" value="<?php echo $Correo_Pl;?>"size="40" /></td>
            </tr>
              <br>
               <tr>
        </select></td>
       <td align="right" bgcolor="#EAEAEA">Estado</td>
       <input type="hidden" name="N_doc" value="<?php echo $_REQUEST['N_doc'] ?>">
      <td><label for="Estado_idEstado"></label>


        <select title="Estado_idEstado" required name="Estado_idEstado" id="Estado_idEstado" style="width:316px">
          <option value="0">Seleccione</option>
          <?php
          while ($Estado_idEstado = $resultado3->fetch_object()) {
          ?>
            <option value="<?php echo $Estado_idEstado->idEstado ?>"><?php echo $Estado_idEstado->Nombre?></option>
            
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
     
    
    
		