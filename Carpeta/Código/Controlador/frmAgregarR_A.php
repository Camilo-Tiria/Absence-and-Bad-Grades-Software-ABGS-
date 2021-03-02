<?php  
require "../Modelo/conexionBasesDatos.php";

if (!isset($_SESSION['user']))


$objConexion = Conectarse();

$sql = "select * FROM r_aprendizaje ";
$sql1 = "select Num_doc , NombresI, ApellidosI   from instructor ";
$sql2 = "select Ficha_carac from programa ";


$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Formulario Agregar R_aprendizaje</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="AgregarR_A.php">
<center>
    <table width="42%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="GRAY" style="color: white">AGREGAR R_APRENDIZAJE</td>
      </tr>
      <tr>
        <td width="37%" align="right" bgcolor="#EAEAEA">Code_Res</td>
        <td width="63%"><label for="Code_Res"></label>
          <input name="Code_Res" type="auto" id="Code_Res" size="40" required name ="Code_Res" title="Code_Res" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Instructor</td>
      <td><label for="INSTRUCTOR_Num_doc"></label>


        <select title="Instructor encargado/Técnico" required name="INSTRUCTOR_Num_doc" id="INSTRUCTOR_Num_doc" style="width:305px">
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
                  </select></td>
        <td  align="right" bgcolor="#EAEAEA">Ficha</td>
        <td><label  for="PROGRAMA_Ficha_carac"></label>
          <select required name="PROGRAMA_Ficha_carac" id="PROGRAMA_Ficha_carac" size="0" style="width:305px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($PROGRAMA_Ficha_carac = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?>"><?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?></option>
            <?php
            }

            ?>
          </select>

      <tr>
        <td align="right" bgcolor="#EAEAEA">Nombre R</td>
        <td><label for="Nom_Res"></label>
          <input title="Nom_Res" required name="Nom_Res" type="text" id="Nom_Res" size="40" /></td>
      </tr>
      <tr>
         
        </td>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
    </table>
  </center>
  </form>
</body>

</html>