<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
if(isset($_POST['submit'])){
header ('Content-type: text/html; charset=utf-8');
$Ficha_carac = $_POST ["Ficha_carac"];
$Nom_Program = $_POST ["Nom_Program"];
$Area = $_POST ["Area"];
$Fecha_Ingr= $_POST ["Fecha_Ingr"];
$Tipo_Formacion= $_POST ["Tipo_Formacion"];
$Modalidad= $_POST ["Modalidad"];
$Estado= $_POST ["Estado"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGREGAR PROGRAMA</title>
  <link rel="stylesheet"  href="estilos1.css?v=<?php echo(rand()); ?>">
</head>
<style type="text/css">
  label, input,select {
  font-size: 0.8em;
  font-family: Time-new-Roman;
</style>
    <form id="form1" style="margin-top: 1px;border-radius: 20px;margin-left: 280px;background-color: #ddd" name="form1" method="post" action="AgregarPrograma.php">

    <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬AGREGAR FICHA✬</td></center>

    <label for="">Ficha de Caracterización:</label>
    <input type="int" required="" name="Ficha_carac" maxlength="7" autocomplete="off" value="<?php if(isset($Ficha_carac)) echo $Ficha_carac ?>">

    <label for="">Nombre_Programa:</label>
    <input type="text" required="" name="Nom_Program" maxlength="10" value="<?php if(isset($Nom_Program)) echo $Nom_Program ?>">

    <label for="">Área:</label>
    <select title="Area" required name="Area" id="Area" required="" type="enum" size="0" value="<?php if(isset($Area)) echo $Area ?>"style="width:318px">
            <option value="Teleinformatica">Teleinformatica</option>
    </select></td>

    <label for="">Fecha de Inicio:</label>
    <input style="height: 22px" type="date" name="Fecha_Ingr" step="1" min="2013-01-01T00:00Z" max="2025-12-31" value="<?php echo date("Y-m-d");?>">

    <label for="">Tipo de Formación:</label>
    <select title="Tipo_Formacion" required id="Tipo_Formacion" name="Tipo_Formacion" required="" type="enum" size="0" style="width:318px">
        <option value="Tecnolog&iacute;a" selected>Tecnología</option>
        <option value="Técnico">Técnico</option>
    </select></td>

    <label for="">Jornada:</label>
    <select title="Jornada" required id="Jornada" name="Jornada" required="" type="enum" size="0" style="width:318px">
        <option value="Diurna"selected>Diurna</option>
        <option value="FDS">FDS</option>
        <option value="Nocturna">Nocturna</option>
    </select></td><div id="Trimestres"></div>

    <label for="">Modalidad:</label>
    <select title="Modalidad" required="" required name="Modalidad" id="Modalidad" required="" value="<?php if(isset($Modalidad)) echo $Modalidad ?>"  type="enum" size="0" style="width:318px">
            <option value="Presencial">Presencial</option>
            <option value="Virtual">Virtual</option>
    </select></td>

    <label for="">Estado Ficha:</label>
    <select title="Estado" required="" required name="Estado" id="Estado" required="" value="<?php if(isset($Estado)) echo $Estado ?>"  type="enum" size="0" style="width:318px">
            <option value="Activo">Activo</option>
    </select></td>

    <input type="submit" value="Agregar" name="submit">
             
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
              $(document).ready(function(){
                recargarlista();

                $('#Jornada').change(function(){
                  recargarlista();
                });
              })
            </script>
            <script type="text/javascript">
              function recargarlista(){
                $.ajax({
                  type:"POST",
                  url: "datos.php",
                  data: "Jornada=" + $('#Jornada').val(),
                  success:function(r){
                    $('#Trimestres').html(r);
                  }
                });
              }

    </script>   
</form>
</html>
           

