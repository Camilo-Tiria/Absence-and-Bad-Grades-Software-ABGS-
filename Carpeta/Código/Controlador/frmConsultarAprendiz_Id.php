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
  font-family: Time-new-Roma;
}
form {
  width: 350px;
  margin: auto;
  background: #ddd;
  padding: 11px;
  margin-top: 1px;
  color: black;
  font-family: Time-new-Roma;
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
<form style="border-radius: 20px;" id="form1" name="form1" method="post" action=""><tr>

    <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white">✬DOCUMENTO APRENDIZ✬</td></center></tr><br>

    <td width="37%" align="right" bgcolor="#EAEAEA">Identificación:</td>
    <td width="63%"><label for="N_doc"></label>
    <input title="Ingrese su numero de documento sin puntos ni comas"  maxlength="10" placeholder="Ej:1000234567" name="N_doc" type="int" id="N_doc" size="40" required="" /></td></tr><tr><tr></tr><tr><br>
    <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td>
</form>

<?php 
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
if (isset($_POST['button2']))
{
  require "../Modelo/conexionBasesDatos.php";
  $objConexion=Conectarse();
  $sql="SELECT * FROM aprendiz, estado, instructor WHERE  N_doc = $N_doc ";
  $resultados = $objConexion->query($sql);

  if($consulta = mysqli_fetch_array($resultados))
  {
    ?>
  <table id="tabla" width="80%"  border="3" align="center">
  <thead style="color: black;">
  <th>Nombres</th><th>Apellidos</th><th>Teléfono</th><th>Tip_doc</th><th>Estado</th><th>Ficha</th><th>Correo_SENA</th><th>Correo_Pl</th>
  </thead>
  <tbody>
<tr bgcolor="#CCCCCC">
<td><?php echo $consulta['Nombres'];?></td>
<td><?php echo $consulta['Apellidos'];?></td>
<td><?php echo $consulta['Tel_apre'];?></td>
<td><center><?php echo $consulta['Tip_doc'];?></td>
<td><?php echo $consulta['Nombre'];?></td>
<td><?php echo $consulta['PROGRAMA_Ficha_carac'];?></td>
<td><?php echo $consulta['Correo_SENA'];?></td>
<td><?php echo $consulta['Correo_Pl'];?></td>
</tr>
    <?php
  }
  else{
    echo "<script> swal.fire({
       title: '¡ERROR!',
       text: '¡Confirme que el documento este correcto!',
       icon: 'error',
       }).then(function(){
        window.location.href='vistaPrincipalAprendiz.php?pg3=frmConsultarAprendiz_Id';
        });
       </script>";
  }
}
?>
</tbody>
</table>
</body>
</html>