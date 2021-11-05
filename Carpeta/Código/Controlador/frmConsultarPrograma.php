<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar Programa por Ficha</title>
</head>

<body>
<style type="text/css">
 
body {
  background:  ;
  color: black;
  font-family: sans-serif;
}

form {
  width: 350px;
  margin: auto;
  background: #ddd;
  padding: 11px;
  margin-top: -10px;
  color: black;
  border: 1px solid black;

}
label, input,select {
  width: 100%;
  display: block;
  font-size: 0.7em;
}
input, select {
  padding: -1px;
  margin-bottom:2px;
}
input[type="submit"] {
  
  background: #333;
  color: white;
  
}
.error {
  color: red;
} 

</style>
<br>
<form style="border-radius:20px" id="form1" name="form1" method="post" action="">


    <tr>
      <br>
      <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬NÚMERO DE FICHA✬</td></center>
    </tr>
   <br>
      <center><td width="37%" align="right" bgcolor="#EAEAEA"></td></center>
      <td width="63%"><label for="Ficha_carac"></label>
      <input title="Ingrese ficha sin puntos ni comas" name="Ficha_carac" maxlength="10" placeholder="Ej:2068754" type="int" id="Ficha_carac" size="40" required="Ficha_carac" /></td>
    </tr>
    <tr> 
   </tr>
   <BR>
      <tr>
      <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td>
    </tr>

</form>
<br>


<?php
if (isset($_POST['button2']))
{
  require "../Modelo/conexionBasesDatos.php";
  $objConexion=Conectarse();
  $sql="SELECT * FROM programa WHERE Ficha_carac = $Ficha_carac ";
  $sql2= "SELECT a. N_doc, a. Estado_idEstado, a. PROGRAMA_Ficha_carac, a. Tip_doc, a. Nombres, a. Apellidos, a. Tel_apre, a. Correo_SENA, a. Correo_Pl, e. Nombre , e. idEstado, p. Ficha_carac from aprendiz as a INNER JOIN estado as e on a. Estado_idEstado=e. idEstado Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac where p. Ficha_carac = $_REQUEST[Ficha_carac]" ;
  $resultado = $objConexion->query($sql);
  $resultados = $objConexion->query($sql2);
  $cantidadAprendices = $resultados->num_rows;
  if($consulta = mysqli_fetch_array($resultado))
  {
    echo "<br> Ficha : ".$consulta['Ficha_carac'] ;echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  N°Trimestres : ".$consulta['Trimestres'];
    echo "<br>";
    echo "<br> Nombre : ".$consulta['Nom_Program'];echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Jornada : ".$consulta['Jornada'];
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
    echo  "<font: Time-new-Roman size=4.3 >La Ficha ingresada no existe, intente de nuevo </font>";

  $Ficha_carac = $_POST['Ficha_carac'];
  

}
?>
</body>
</html>