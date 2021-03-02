<?php  
require "../Modelo/conexionBasesDatos.php";

if (!isset($_SESSION['userA']))
  header("location:index.php?x=2");

$objConexion = Conectarse();

$sql = "select * FROM programa ";


$resultado = $objConexion->query($sql);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Formulario Agregar programa</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="AgregarPrograma.php">
<center>
    <table width="42%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="GRAY" style="color:white" >AGREGAR FICHA</td>
      </tr>
      <tr>
        <td width="37%" align="right" bgcolor="#EAEAEA">Ficha carac</td>
        <td width="63%"><label for="Ficha_carac"></label>
          <input name="Ficha_carac" type="int" id="Ficha_carac" size="42" required name ="Ficha_carac" title="Número de Ficha" /></td>
      </tr>
      <tr>
       <tr>
        <td align="right" bgcolor="#EAEAEA">Nombre Programa</td>
        <td><label for="Nom_program"></label>
          <input title="Nom_program" required name="Nom_program" type="text" id="Nom_program" size="42" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#EAEAEA">Area</td>
        <td><label for="Area"></label>
          <input title="Area" required name="Area" type="text" id="Area" size="42" /></td>
      </tr>
      <tr>
         <td align="right" bgcolor="#EAEAEA">Fecha ingreso</td>
        <td><label for="Fecha_Ingr"></label>
          <input title="Inicio" required name="Fecha_Ingr" type="date" id="Fecha_Ingr" size="40" style="width:316px"/></td>
       </tr>
      <tr>
        <br>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Tipo Formacion</td>
        <td><label for="Tipo_Formacion"></label>
          <select title="Tipo_formacion" required name="Tipo_Formacion" id="Tipo_Formacion" type="enum" size="0" style="width:318px">
            <option value="0">Seleccione</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Tecnico">Tecnico</option>
          </select></td>
        </td>
         </tr>
      <tr>
        <br>

        </select></td>
        <td align="right" bgcolor="#EAEAEA">Modalidad</td>
        <td><label for="Modalidad"></label>
          <select title="Modalidad" required name="Modalidad" id="Modalidad" type="enum" size="0" style="width:318px">
            <option value="0">Seleccione</option>
            <option value="Presencial">Presencial</option>
            <option value="Virtual">Virtual</option>
          </select></td>
        </td>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
    </table>
  </center>
  </form>
</body>

</html>