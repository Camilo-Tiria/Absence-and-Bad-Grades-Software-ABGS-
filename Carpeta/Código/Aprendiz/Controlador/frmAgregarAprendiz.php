<?php  
require "../Modelo/conexionBasesDatos.php";

if (!isset($_SESSION['userA']))
  header("location:index.php?x=2");

$objConexion = Conectarse();

$sql = "select idEstado , Nombre from estado ";
$sql1 = "select Num_doc , NombresI, ApellidosI   from instructor ";
$sql2 ="select Ficha_carac from programa ";

$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Formulario Agregar Aprendiz</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="Agregar.php">
<center>
    <table width="42%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="GRAY" style="color:white">AGREGAR APRENDIZ</td>
      </tr>
      <tr>
        <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
        <td width="63%"><label for="N_doc"></label>
          <input name="N_doc" type="int" id="N_doc" size="40" required="" title="Número de identidad del aprendiz" /></td>
      </tr>
      <tr>

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
      </tr>

      <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Tipo doc:</td>
        <td><label for="Tip_doc"></label>
          <select title="Tipo de documento del aprendiz" required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:305px">
            <option value="0">Seleccione</option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select></td>
        </td>

      <tr>
        <td align="right" bgcolor="#EAEAEA">Nombres</td>
        <td><label for="Nombres"></label>
          <input title="Nombres del aprendiz" required name="Nombres" type="text" id="Nombres" size="40" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Apellidos</td>
        <td><label for="Apellidos"></label>
          <input title="Apellidos del aprendiz" required name="Apellidos" type="text" id="Apellidos" size="40" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Telefono</td>
        <td><label for="Tel_apre"></label>
          <input title="Teléfono del aprendiz" required name="Tel_apre" type="int" id="Tel_apre" size="40" /></td>
      </tr>
      <td align="right" bgcolor="#EAEAEA">Correo_SENA</td>
      <td><label for="Correo_SENA"></label>
        <input title="Correo SENA del aprendiz" required name="Correo_SENA" type="email" id="Correo_SENA" size="40"placeholder="PaezT@misena.edu.co" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Correo_Pl</td>
        <td><label for="Correo_Pl"></label>
          <input title="Correo personal del aprendiz" required name="Correo_Pl" type="email" id="Correo_Pl" size="40" placeholder="Adrian09@gmail.com" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$"/></td>
        </td>
      </tr>
      <tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Estado</td>
        <td><label for="Estado_idEstado"></label>


          <select title="Estado del aprendiz" required name="Estado_idEstado" id="Estado_idEstado" style="width:305px">
            <option value="0">Seleccione</option>

            <?php
            while ($Estado_idEstado = $resultado->fetch_object()) {
            ?>
              <option value="<?php echo $Estado_idEstado->idEstado ?>"><?php echo $Estado_idEstado->Nombre ?></option>
            <?php
            }

            ?>
          </select>
      </tr>
      <td align="right" bgcolor="#EAEAEA">Instructor Tecnico</td>
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

        </tr>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
    </table>
  </center>
  </form>
</body>

</html>