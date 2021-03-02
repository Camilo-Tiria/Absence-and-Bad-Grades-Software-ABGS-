<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar Aprendiz por Num_doc</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

  <center><table width="42%" border="3" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="GRAY" style="color:white">CONSULTAR APRENDIZ</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
      <td width="63%"><label for="N_doc"></label>
      <input title="Ingrese su numero de documento sin puntos ni comas" name="N_doc" type="int" id="N_doc" size="40" required="" /></td>
    </tr>
    <tr>
 <tr>
   </tr>
      <tr>
      <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td>
    </tr>
  </table></center>
</form>
<?php

if (isset($_POST['button2']))
{
  require "../Modelo/conexionBasesDatos.php";
  $objConexion=Conectarse();
  $sql="SELECT * FROM aprendiz WHERE N_doc = $N_doc ";
  $resultados = $objConexion->query($sql);
  while ($consulta = mysqli_fetch_array($resultados))
  {
    echo "<br> Nombre : ".$consulta['Nombres'];
    echo "<br>";
    echo "<br> Apellido : ".$consulta['Apellidos'];
    echo "<br>";
    echo "<br> Telefono : ".$consulta['Tel_apre'];
    echo "<br>";
    echo "<br> Correo SENA : ".$consulta['Correo_SENA'];
    echo "<br>";
    echo "<br> Ficha : ".$consulta['PROGRAMA_Ficha_carac'];
    echo "<br>";
  }

  $N_doc = $_POST['N_doc'];

}
?>
</body>
</html>