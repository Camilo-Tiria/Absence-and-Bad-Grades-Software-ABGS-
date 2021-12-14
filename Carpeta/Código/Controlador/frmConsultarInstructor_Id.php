
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
  box-shadow: 5px 5px 8px black;
  border: none;
  border-radius:20px
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
margin-left: 5%;
border-radius: 10px;
box-shadow: 5px 5px 8px black;
}
</style>
<body>
<form id="form1" name="form1" method="post" action=""><tr>
    <center><td colspan="2" align="center" bgcolor="GRAY" style="color: white">✬CONSULTAR INSTRUCTOR✬</td></center></tr><br><tr>

    <td width="37%" align="right" bgcolor="#EAEAEA">Identificación:</td>
    <td width="63%"><label for="N_doc"></label>
    <input title="Ingrese su numero de documento sin puntos ni comas" name="Num_doc" type="int" id="Num_doc" size="40" required="" /></td></tr><tr> </tr><tr><br>
    <td colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button2" id="button" value="Consultar" /></td>
    </tr>
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
  $sql="SELECT * FROM instructor, tipoinstructor, estadoinstructor WHERE Num_doc = $Num_doc ";  
  $resultados = $objConexion->query($sql);
  if($consulta = mysqli_fetch_array($resultados)) 
  {
    ?>
<table id="tabla" width="80%"  border="3" align="center">
  <thead style="color: black;">
   <th>Nombre</th><th>Apellido</th><th>Tipo_Doc</th><th>Area</th><th>Estado</th><th>Tipo_Instructor</th><th>Dirección</th><th>Teléfono</th><th>Correo_Pl</th><th>Correo SENA</th>
  </thead>
  <tbody>

  <tr bgcolor="#CCCCCC">
    <td><?php echo $consulta['NombresI'];?></td>
    <td><?php echo $consulta['ApellidosI'];?></td>
    <td><center><?php echo $consulta['Tip_doc'];?></td>
    <td><?php echo $consulta['Area'];?></td>
    <td><?php echo $consulta['EstadoInstruc'];?></td>
    <td><center><?php echo $consulta['TipoInstructor'];?></td>
    <td><?php echo $consulta['Direccion'];?></td>
    <td><?php echo $consulta['Telefono'];?></td>
    <td><?php echo $consulta['Correo_Pl'];?></td>
    <td><?php echo $consulta['Correo_corp'];?></td>
  </tr>
    <?php
    
  }
  else{
    echo "<script> swal.fire({
       title: '¡ERROR!',
       text: '¡Confirme que el documento exista!',
       icon: 'error',
       }).then(function(){
        window.location.href='vistaPrincipalInstructor.php?pg3=frmConsultarInstructor_Id';
        });
       </script>";
  
  }
}
?>
</tbody>
</table>
</body>
</html>