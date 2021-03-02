<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar Instructor por Num_doc</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

  <center><table width="42%" border="3" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="GRAY" style="color: white">CONSULTAR INSTRUCTOR</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
      <td width="63%"><label for="N_doc"></label>
      <input title="Ingrese su numero de documento sin puntos ni comas" name="Num_doc" type="int" id="Num_doc" size="40" required="" /></td>
    </tr>
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
  $sql="SELECT * FROM instructor WHERE Num_doc = $Num_doc ";
  $resultados = $objConexion->query($sql);
  while ($consulta = mysqli_fetch_array($resultados))
  {
    echo "<br> Nombre : ".$consulta['NombresI'];
    echo "<br>";
    echo "<br> Apellido : ".$consulta['ApellidosI'];
    echo "<br>";
    echo "<br> Telefono : ".$consulta['Telefono'];
    echo "<br>";
    echo "<br> Correo SENA : ".$consulta['Correo_corp'];
    echo "<br>";
    echo "<br> Direccion : ".$consulta['Direccion'];
    echo "<br>";
  }

  $Num_doc = $_POST['Num_doc'];
  

}
?>
</body>
</html>