<?php
$Ficha_carac=$_GET["Ficha_carac"];
 require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM programa WHERE Ficha_carac='$Ficha_carac'");
$programa=mysqli_fetch_array($actualizar);

$Ficha_carac = $programa ["Ficha_carac"];
$Nom_Program = $programa["Nom_Program"];
$Area = $programa["Area"];
$Fecha_Ingr= $programa["Fecha_Ingr"];
$Tipo_Formacion= $programa["Tipo_Formacion"];
$Modalidad= $programa ["Modalidad"];

$sql = "select * from programa ";
$resultado = $objConexion->query($sql);

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
<a href="vistaPrincipalFichas.php?pg2=listarProgramas" class="boton">VOLVER</a>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <head>
  <body background= "../Imagenes/Fondo1.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Editar Programa</title>
</head>
<body>
  <form id="form1" name="form1" method="post" action="ModificarPrograma.php">
      <center>
         <table width="38%" border="3" align="center">
              <td colspan="2" align="center" bgcolor="GRAY" style="color:white">MODIFICAR FICHA</td>
              </tr>
              <br>
              <tr>
               <td align="right" bgcolor="#EAEAEA">Nombre Programa</td>
              <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
                <td><label for="Nom_Program"></label>
               <input title="Nom_Program" readonly="readonly" disabled ="disabled"  required name="Nom_Program" type="text" id="Nom_Program" value="<?php echo $Nom_Program;?>"size="40" /></td>
           </tr>
            <br>
                <tr>
               <td align="right" bgcolor="#EAEAEA">Area</td>
                  <input type="hidden"  name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
             <td><label for="Area"></label>
              <input title="Area" readonly="readonly" disabled ="disabled" required name="Area" type="text" id="Area" value="<?php echo $Area;?>"size="40" /></td>
            </tr>
              <br>
              <tr>
                   <td align="right" bgcolor="#EAEAEA">Fecha Ingreso</td>
                <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
                 <td><label for="Fecha_Ingr"></label>
               <input title="Fecha_Ingr" readonly="readonly" disabled ="disabled"  required name="Fecha_Ingr" type="date" id="Fecha_Ingr" value="<?php echo $Fecha_Ingr;?>" size="40" style="width:313px"/></td>
                 </tr>
                 <br>
                   <tr>
        </td>
        <td align="right" bgcolor="#EAEAEA">Tipo de Formacion:</td>
         <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
        <td><label for="Tipo_Formacion"></label>
          <select title="Tipo de formacion" required name="Tipo_Formacion" id="Tipo_Formacion" type="enum" size="0" style="width:318px ">
            <option value="0">Seleccione</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Tecnico">Tecnico</option>
          </td>
        </td>
            <br>
             <tr>
        </td>
        <td align="right" bgcolor="#EAEAEA">Modalidad:</td>
               <input type="hidden" name="Ficha_carac" value="<?php echo $_REQUEST['Ficha_carac'] ?>">
        <td><label for="Modalidad"></label>
          <select title="Modalidad" required name="Modalidad" id="Modalidad" type="enum" size="0" style="width:318px">
            <option value="0">Seleccione</option>
            <option value="Presencial">Presencial</option>
            <option value="Virtual">Virtual</option>
          </td>
        </td>
        </tr>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Guardar Cambios" /></td>
        </tr>                               
          </table>
      </center>
  </form>
</body>
<html>
      


     
    
    