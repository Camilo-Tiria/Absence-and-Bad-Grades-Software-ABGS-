<?php  


$Correo_SENA=$_GET["Correo_SENA"];
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$actualizar=mysqli_query($objConexion,"SELECT * FROM usuario WHERE Correo_SENA='$Correo_SENA'");
$instructor=mysqli_fetch_array($actualizar);

$sql = "select idTipoInstructor , TipoInstructor from tipoinstructor ";
$sql1 = "select  idEstadoInstructor , EstadoInstruc from estadoinstructor ";
$sql2 = "select  Area from instructor ";

$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover"><br>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGREGAR INSTRUCTOR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />     
<style type="text/css">
    * {
  box-sizing: border-box;
}
body {
  background:  ;
  color: white;
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
  margin-left: 60%;
}
form:hover{
  border-color: #265C39;
  -webkit-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
box-shadow: 1px 10px 60px 0px #265C39;
}
label, input,select {
  width: 100%;
  display: block;
  font-size: 0.9em;
  font-family: Time-new-Roman;
}
input, select {
  padding: -1px;
  margin-bottom:3px;
   font-family: Time-new-Roman;
}
input[type="submit"] {
  width: 4
  0%;
  margin: auto;
  background: #333;
  color: white;
  border: none;
  cursor: pointer;
}
.error {
  color: red;
} 
#img{
margin-top: -37%;
margin-left: 3%;
border-radius: 5%;
-webkit-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 12px 29px 81px 0px rgba(0,0,0,0.75);
box-shadow: 12px 50px 55px 0px rgba(0,0,0,0.75);
}
</style>
</head>
<body>
<form id="form1" style="border-radius: 20px" name="form1" method="post" action="AgregarInstructor.php"><tr>

    <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white ">✬AGREGAR INSTRUCTOR✬</td></center>
     
    <td width="37%" align="right" bgcolor="#EAEAEA">Identificación</td>
    <td width="63%"><label for="Num_doc"></label>
    <input name="Num_doc" type="int" id="Num_doc" maxlength="10" size="40" required="" title="Número de identidad del instructor" /></td></tr><tr>

    <td  align="right" bgcolor="#EAEAEA">Contrato :</td>
    <td><label  for="E"></label>
    <select required name="TipoInstructor_idTipoInstructor" id="TipoInstructor_idTipoInstructor" size="0" style="width:326px" title="Tipo en el que se encuentra el instructor">
            <?php
            while ($TipoInstructor_idTipoInstructor = $resultado->fetch_object()) {
            ?>
              <option value="<?php echo $TipoInstructor_idTipoInstructor->idTipoInstructor ?>"><?php echo $TipoInstructor_idTipoInstructor->TipoInstructor ?></option>
            <?php
            }
            ?>
    </select></tr><tr>

    <td align="right" bgcolor="#EAEAEA">Nombres</td>
    <td><label for="NombresI"></label>
    <input title="Nombres del instructor" maxlength="20" required name="NombresI" type="text" id="NombresI" size="40" /></td></tr><tr>

    <td align="right" bgcolor="#EAEAEA">Apellidos</td>
    <td><label for="ApellidosI"></label>
    <input title="Apellidos del instructor" maxlength="29" required name="ApellidosI" type="text" id="ApellidosI" size="40" /></td></tr><tr>

    <td align="right" bgcolor="#EAEAEA">Telefono</td>
    <td><label for="Telefono"></label>
    <input title="Teléfono del instructor" maxlength="10" required name="Telefono" type="int" id="Telefono" size="40" /></td></tr><tr>

    <td align="right" bgcolor="#EAEAEA">Dirección</td>
    <td><label for="Direccion"></label>
    <input title="Direccion del instructor" maxlength="20" required name="Direccion" type="int" id="Direccion" size="40" /></td></tr>

    <td align="right" bgcolor="#EAEAEA">Correo_SENA</td>
    <input type="hidden" name="Correo_SENA" value="<?php echo $_REQUEST['Correo_SENA'] ?>">
    <td><label for="Correo_corp"></label>
    <input title="Correo SENA del instructor" required name="Correo_corp" type="email" id="Correo_corp" value="<?php echo $Correo_SENA;?>" size="40"placeholder="PaezT@misena.edu.co" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.
    [a-z]{2,}$"  /></td></tr><tr>

    <td align="right" bgcolor="#EAEAEA">Correo_Pl</td>
    <td><label for="Correo_Pl"></label>
    <input title="Correo personal del instructor" required name="Correo_Pl" type="email" id="Correo_Pl" size="40" placeholder="Adrian09@gmail.com" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$"/></td></td></tr><tr><tr>

    <td align="right" bgcolor="#EAEAEA">Estado</td>
    <td><label for="EstadoInstructor_idEstadoInstructor"></label>
    <select title="Estado del instructor" required name="EstadoInstructor_idEstadoInstructor" id="EstadoInstructor_idEstadoInstructor" style="width:326px">
            <?php
            while ($EstadoInstructor_idEstadoInstructor = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $EstadoInstructor_idEstadoInstructor->idEstadoInstructor ?>"><?php echo $EstadoInstructor_idEstadoInstructor->EstadoInstruc ?></option>
            <?php
            }
            ?>
    </select></tr>

    <td align="right" bgcolor="#EAEAEA">Tipo doc:</td>
    <td><label for="Tip_doc"></label>
    <select title="Tipo de documento del instructor" required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:326px">
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
    </select></td></td><tr>

    <td align="right" bgcolor="#EAEAEA">Area:</td>
    <td><label for="Area"></label>
    <select title="" required name="Area" id="Area" type="enum" size="0" style="width:325px">
            <option value="Técnico">Técnico</option>
            <option value="C.Física">C.Física</option>
            <option value="Promover">Promover</option>
            <option value="Inglés">Inglés</option>          
    </select></td></tr><tr><br>

<td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Agregar" /></td></tr>
</form>
<img class="img" id="img" src="../Imagenes/profe.jpeg">
</body>
</html>


