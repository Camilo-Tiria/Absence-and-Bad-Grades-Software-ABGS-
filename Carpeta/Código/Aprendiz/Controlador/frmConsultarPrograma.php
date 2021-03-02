<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar Programa por Ficha</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

  <center><table width="42%" border="3" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="GRAY" style="color:white" >CONSULTAR FICHA</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Ficha</td>
      <td width="63%"><label for="Ficha_carac"></label>
      <input title="Ingrese ficha sin puntos ni comas" name="Ficha_carac" type="int" id="Ficha_carac" size="40" required="Ficha_carac" /></td>
    </tr>
    <tr> 
   </tr>
      <tr>
      <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td>
    </tr>
  </table></center>
</form>
<br>
<br>

<?php
if (isset($_POST['button2']))
{
  require "../Modelo/conexionBasesDatos.php";
  $objConexion=Conectarse();
  $sql="SELECT * FROM programa WHERE Ficha_carac = $Ficha_carac ";
  $sql2=  "select * from aprendiz, programa where (aprendiz.PROGRAMA_Ficha_carac=programa.Ficha_carac)";
  $resultado = $objConexion->query($sql);
  $resultados = $objConexion->query($sql2);
  $cantidadAprendices = $resultados->num_rows;
  if($consulta = mysqli_fetch_array($resultado))
  {
    echo "<br> Nombre : ".$consulta['Nom_Program'];
    echo "<br>";
    echo "<br> Area : ".$consulta['Area'];
    echo "<br>";
    echo "<br> Tipo Formacion : ".$consulta['Tipo_Formacion'];
    echo "<br>";
    echo "<br> Inicio : ".$consulta['Fecha_Ingr'];
    echo "<br>";
    echo "<br> Modalidad : ".$consulta['Modalidad'];
    echo "<br>";
    echo "<br> Cantidad de aprendices : ".$cantidadAprendices;
    echo "<br>";
  }
  else
    echo  "<font size=5 >La Ficha ingresada no existe, intente de nuevo </font>";

  $Ficha_carac = $_POST['Ficha_carac'];
  

}
?>
</body>
</html>