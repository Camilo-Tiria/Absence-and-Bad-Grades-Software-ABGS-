<?php
require "../Modelo/conexionBasesDatos.php";


$objConexion=Conectarse();

$sql="select * from aprendiz ";
$sql1="select * from r_aprendizaje ";


$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);


?>
<style>
.boton {
   padding: 10px;
   margin-left: 1100px;
   text-decoration: none;
   border-radius: 100px;
   background-color: gray;
   color: white;
}
</style>
<a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas" class="boton">VOLVER</a>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Aprendices:)</title>

</head>

<body>
    <body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
   <form id="form1" name="form1" method="post" action="AgregarInasistencia.php">
<h1 align="center">ASISTENCIA</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="GRAY" style="color: white">
      <td width="19%">N_doc</td>
    <td width="19%">Nombres</td>
    <td width="12%">Apellidos</td>
    <td width="12%">Periodo</td>
    <td width="12%">Observaciones</td>
    <td width="12%">Horas</td>
      <td width="12%">Fecha</td>
         <td width="12%">R_Aprendizaje</td>
      

 

  </tr>
  
  
  <?php
  while ($aprendiz = $resultado ->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
       <td><?php  echo $aprendiz->N_doc ?></td>
        <td><?php  echo $aprendiz->Nombres ?></td>
        <td><?php  echo $aprendiz->Apellidos  ?></td>
         <td><label for="Periodo_Inas"></label>
          <select title="Tipo de documento del aprendiz" required name="" id="Periodo_Inas" type="enum" size="0" style="width:90px">
            <option value="0">Seleccione</option>
            <option value="1">1</option>
            <option value="2">2</option>
              <option value="3">3</option>
                     <option value="4">4</option>
                            <option value="5">5</option>
                                   <option value="6">6</option>

          </select></td>
        </td>
          <td><label for="Observaciones"></label>
          <select title="Tipo de documento del aprendiz" required name="Observaciones" id="Observaciones" type="enum" size="0" style="width:100px">
            <option value="0">Seleccione</option>
            <option value="Tarde">Tarde</option>
            <option value="Falta">Falta</option>
              <option value="Permiso">Permiso</option>
              <option value="Permiso">Retirado</option>
          </select></td>

          <td><label for="Cantidad_Horas"></label>
          <select title="Tipo de documento del aprendiz" required name="" id="Cantidad_Horas" type="enum" size="0" style="width:90px">
            <option value="0">Seleccione</option>
            <option value="1">1</option>
            <option value="2">2</option>
              <option value="3">3</option>
                     <option value="4">4</option>
                            <option value="5">5</option>
                                   <option value="6">6</option>
        <td><label for="Fecha_Inas"></label>
          <input title="Inicio" required name="Fecha_Inas" type="date" id="Fecha_Inas" size="30" style="width:150px"/></td>
           <td><label for="R_APRENDIZAJE_Code_Res"></label>


          <select title="Estado del aprendiz" required name="R_APRENDIZAJE_Code_Res" id="R_APRENDIZAJE_Code_Res" style="width:150px">
            <option value="0">Seleccione</option>

            <?php
            while ($R_APRENDIZAJE_Code_Res = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $R_APRENDIZAJE_Code_Res->Code_Res ?>"><?php echo $R_APRENDIZAJE_Code_Res->Nom_Res ?></option>
            <?php
            }

            ?>

      
        </td>
          

       
       
  <?php
  }
  ?>
  <CENTER>
  </tr>
        <tr>
          <CENTER><td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td> </CENTER>
  </CENTER>
</table>
</body>
</html>
