<?php  
require "../Modelo/conexionBasesDatos.php";

if (!isset($_SESSION['userA']))
  header("location:index.php?x=2");

$objConexion = Conectarse();

$sql = "select idTipoInstructor , TipoInstructor from tipoinstructor ";
$sql1 = "select  idEstadoInstructor , EstadoInstruc from estadoinstructor ";

$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Formulario Agregar Instructor</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="AgregarInstructor.php">
<center>
    <table width="42%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="GRAY" style="color:white ">AGREGAR INSTRUCTOR</td>
      </tr>
      <tr>
        <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
        <td width="63%"><label for="Num_doc"></label>
          <input name="Num_doc" type="int" id="Num_doc" size="40" required="" title="Número de identidad del instructor" /></td>
      </tr>
      <tr>
        <td  align="right" bgcolor="#EAEAEA">Contrato :</td>
        <td><label  for="E"></label>
          <select required name="TipoInstructor_idTipoInstructor" id="TipoInstructor_idTipoInstructor" size="0" style="width:305px" title="Tipo en el que se encuentra el instructor">
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
       
        <td align="right" bgcolor="#EAEAEA">Tipo doc:</td>
        <td><label for="Tip_doc"></label>
          <select title="Tipo de documento del instructor" required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:305px">
            <option value="0">Seleccione</option>
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select></td>
        </td>

      <tr>
        <td align="right" bgcolor="#EAEAEA">Nombres</td>
        <td><label for="NombresI"></label>
          <input title="Nombres del instructor" required name="NombresI" type="text" id="NombresI" size="40" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">ApellidosI</td>
        <td><label for="ApellidosI"></label>
          <input title="Apellidos del instructor" required name="ApellidosI" type="text" id="ApellidosI" size="40" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Telefono</td>
        <td><label for="Telefono"></label>
          <input title="Teléfono del instructor" required name="Telefono" type="int" id="Telefono" size="40" /></td>
      </tr>
<tr>
        <td align="right" bgcolor="#EAEAEA">Direccion</td>
        <td><label for="Direccion"></label>
          <input title="Direccion del instructor" required name="Direccion" type="int" id="Direccion" size="40" /></td>
      </tr>

      <td align="right" bgcolor="#EAEAEA">Correo_SENA</td>
      <td><label for="Correo_corp"></label>
        <input title="Correo SENA del instructor" required name="Correo_corp" type="email" id="Correo_corp" size="40"placeholder="PaezT@misena.edu.co" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Correo_Pl</td>
        <td><label for="Correo_Pl"></label>
          <input title="Correo personal del instructor" required name="Correo_Pl" type="email" id="Correo_Pl" size="40" placeholder="Adrian09@gmail.com" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$"/></td>
        </td>
      </tr>
      <tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Estado</td>
        <td><label for="EstadoInstructor_idEstadoInstructor"></label>


          <select title="Estado del aprendiz" required name="EstadoInstructor_idEstadoInstructor" id="EstadoInstructor_idEstadoInstructor" style="width:305px">
            <option value="0">Seleccione</option>

            <?php
            while ($EstadoInstructor_idEstadoInstructor = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $EstadoInstructor_idEstadoInstructor->idEstadoInstructor ?>"><?php echo $EstadoInstructor_idEstadoInstructor->EstadoInstruc ?></option>
            <?php
            }

            ?>

        </tr>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
    </table>
  </center>
  </form>
</body>

</html>