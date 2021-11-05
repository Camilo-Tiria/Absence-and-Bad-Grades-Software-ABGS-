<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style type="text/css">

  #divContenido {
    position:absolute;
    left:200px;
    top:50px;
    width:1000px;
    height:450px;
    z-index:0;
    overflow:auto;
    }
 
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
<body>
<form style="border-radius:20px" id="form1" name="form1" method="post" action="">
    <tr>
      <center><td colspan="2" align="center" bgcolor="GRAY" style="color: white">✬CONSULTAR INSTRUCTOR✬</td></center>
    </tr>
    <br>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificación:</td>
      <td width="63%"><label for="N_doc"></label>
      <input title="Ingrese su numero de documento sin puntos ni comas" name="Num_doc" type="int" id="Num_doc" size="40" required="" /></td>
    </tr>
    <tr> 
   </tr>
      <tr>
      <br>
      <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td>
    </tr>
  
</form>
<?php

if (isset($_POST['button2']))
{
  require "../Modelo/conexionBasesDatos.php";
  $objConexion=Conectarse();
  $sql="SELECT * FROM instructor, tipoinstructor, estadoinstructor WHERE Num_doc = $Num_doc ";  
  $resultados = $objConexion->query($sql);
  if($consulta = mysqli_fetch_array($resultados)) {
    echo "<br> Nombre : ".$consulta['NombresI'];
  
    echo "<br> Apellido : ".$consulta['ApellidosI'];

        echo "<br> Tipo_Doc : ".$consulta['Tip_doc']; 

echo "<br> Area : ".$consulta['Area'];

    echo "<br> Estado : ".$consulta['EstadoInstruc'];
  
 echo "<br>";
   
   
    echo "<br> Tipo_Instructor : ".$consulta['TipoInstructor'];
     
 echo "<br> Direccion : ".$consulta['Direccion'];
  
    echo "<br> Telefono : ".$consulta['Telefono'];
    
   
    echo "<br> Correo_Pl : ".$consulta['Correo_Pl'];
  
   
     echo "<br> Correo SENA : ".$consulta['Correo_corp'];
  }
  else
    echo  "<font size=4 >El documento ingresada no existe, intente de nuevo </font>";

  $Num_doc = $_POST['Num_doc'];
  

}
?>
</body>
</html>