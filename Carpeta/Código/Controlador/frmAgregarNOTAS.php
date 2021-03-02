<?php  
 require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

$sql = "select * FROM notas ";
$sql1 = "select Nom_Res, Code_Res from r_aprendizaje ";
$sql2 = "select N_doc, Nombres from aprendiz ";


$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Formulario Agregar Nota</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="AgregarNota.php">
<center>
    <table width="42%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="GRAY" style="color: white">AGREGAR NOTA</td>
      </tr>
      <tr>
         <td  align="right" bgcolor="#EAEAEA">Aprendiz</td>
        <td><label  for="APRENDIZ_Nota"></label>
          <select required name="APRENDIZ_Nota" id="APRENDIZ_Nota" size="0" style="width:305px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($APRENDIZ_Nota = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $APRENDIZ_Nota->N_doc ?>"><?php echo $APRENDIZ_Nota->Nombres ?></option>
            <?php
            }

            ?>
          </select>
      <tr>
      <tr>
        <td width="37%" align="right" bgcolor="#EAEAEA">R_Aprendizaje</td>
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
      
      <tr>
        <td align="right" bgcolor="#EAEAEA">Nota</td>
        <td><label for="Nota"></label>
          <input title="Nota" required name="Nota" type="Nota" id="Nota" size="40" /></td>
      </tr>
      <tr>
         
        </td>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
    </table>
  </center>
  </form>
</body>

</html>
