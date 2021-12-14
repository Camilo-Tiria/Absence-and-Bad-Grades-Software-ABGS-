<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  box-shadow: 5px 5px 8px black;
  border: none;
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
#tabla{
margin-top: 8%;
margin-left: 10%;
border-radius: 10px;
box-shadow: 5px 5px 8px black;
}
</style>
<br>
<form style="border-radius:20px" id="form1" name="form1" method="post" action=""><tr><br>

      <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬NÚMERO DE FICHA✬</td></center></tr><br>

      <center><td width="37%" align="right" bgcolor="#EAEAEA"></td></center>
      <td width="63%"><label for="Ficha_carac"></label>
      <input title="Ingrese ficha sin puntos ni comas" name="Ficha_carac" maxlength="10" placeholder="Ej:2068754" type="int" id="Ficha_carac" size="40" required="Ficha_carac" /></td></tr><tr> </tr><BR><tr>
      <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td></tr>
</form><br>
<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
if (isset($_POST['button2']))
{
  require "../Modelo/conexionBasesDatos.php";
  $objConexion=Conectarse();
  $sql="SELECT * FROM programa WHERE Ficha_carac = $Ficha_carac ";
  $sql2= "SELECT a. N_doc, a. Estado_idEstado, a. PROGRAMA_Ficha_carac, a. Tip_doc, a. Nombres, a. Apellidos, a. Tel_apre, a. Correo_SENA, a. Correo_Pl, e. Nombre , e. idEstado, p. Ficha_carac from aprendiz as a INNER JOIN estado as e on   a. Estado_idEstado=e. idEstado Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac where p. Ficha_carac = $_REQUEST[Ficha_carac]" ;
  $resultado = $objConexion->query($sql);
  $resultados = $objConexion->query($sql2);
  $cantidadAprendices = $resultados->num_rows;
  if($consulta = mysqli_fetch_array($resultado))
  {
    ?>
  <table id="tabla" width="80%"  border="3" align="center">
  <thead style="color: black;">
  <th>Ficha</th><th>Nombre</th><th>Area</th><th>Tipo Formación</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Modalidad</th><th>Cantidad Aprendices</th><th>N°
  Trimestres</th><th>Jornada</th><th>Estado</th>
  </thead>
  <tbody>
    <tr bgcolor="#CCCCCC">
    <td><?php echo $consulta['Ficha_carac'];?></td>
    <td><?php echo $consulta['Nom_Program'];?></td>
    <td><?php echo $consulta['Area'];?></td>
    <td><?php echo $consulta['Tipo_Formacion'];?></td>
    <td><?php echo $consulta['Fecha_Ingr'];?></td>
    <td><?php echo $consulta['Modalidad'];?></td>
    <td><center><?php echo $cantidadAprendices;?></td>
    <td><center><?php echo $consulta['Trimestres'];?></td>
    <td><?php echo $consulta['Jornada'];?></td>
     <td><?php echo $consulta['Estado'];?></td>
    </tr>
    <?php
  }
  else{
    echo "<script> swal.fire({
       title: '¡ERROR!',
       text: '¡Confirme que la Ficha este correcta!',
       icon: 'error',
       }).then(function(){
        window.location.href='vistaPrincipalFichas.php?pg2=frmConsultarPrograma';
        });
       </script>";
  }
}
?>
</tbody>
</table>
</body>
</html>