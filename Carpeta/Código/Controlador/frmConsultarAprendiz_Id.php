<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar Aprendiz por Num_doc</title>
</head>

<body>
  <style type="text/css">
 
body {
  background:  ;
  color: black;
  font-family: Time-new-Roma;
}

form {
  width: 350px;
  margin: auto;
  background: #ddd;
  padding: 11px;
  margin-top: 1px;
  color: black;
  border: 1px solid black;
  font-family: Time-new-Roma;

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
      <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white">✬DOCUMENTO APRENDIZ✬</td></center>
    </tr>
    <br>
    
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificación:</td>
      <td width="63%"><label for="N_doc"></label>
      <input title="Ingrese su numero de documento sin puntos ni comas"  maxlength="10" placeholder="Ej:1000234567" name="N_doc" type="int" id="N_doc" size="40" required="" /></td>
    </tr>
    <tr>
 <tr>
   </tr>
      <tr>
        <br>
      <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td>
    
  
</form><br>
<?php

if (isset($_POST['button2']))
{
  require "../Modelo/conexionBasesDatos.php";
  $objConexion=Conectarse();
  $sql="SELECT * FROM aprendiz, estado, instructor WHERE  N_doc = $N_doc ";
  $resultados = $objConexion->query($sql);
  if($consulta = mysqli_fetch_array($resultados))
  {
    echo "<br> Documento : ".$consulta['N_doc'];
    echo "<br> Nombre : ".$consulta['Nombres'];
 
    echo "<br> Apellido : ".$consulta['Apellidos'];
   
    echo "<br> Telefono : ".$consulta['Tel_apre'];
    echo "<br>";
   
     echo "<br> Tip_doc : ".$consulta['Tip_doc'];
   
     echo "<br> Estado : ".$consulta['Nombre'];
   
    
    echo "<br> Ficha : ".$consulta['PROGRAMA_Ficha_carac'];
      
    echo "<br> Correo SENA : ".$consulta['Correo_SENA'];
    
    echo "<br> Correo Personal : ".$consulta['Correo_Pl'];
    

  
  }
  else
    echo  "<font size=5 >El documento ingresado no existe, intente de nuevo </font>";

  $N_doc = $_POST['N_doc'];

}
?>
</body>
</html>