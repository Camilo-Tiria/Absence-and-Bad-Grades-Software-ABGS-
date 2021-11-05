<?php  
require "../Modelo/conexionBasesDatos.php";

if (!isset($_SESSION['user']))
  header("location:/Proyecto_SENA/ABGS/?x=2");

$objConexion = Conectarse();

$sql = "select idEstado , Nombre from estado ";

$sql2 ="select Ficha_carac from programa ";

$resultado = $objConexion->query($sql);

$resultado2 = $objConexion->query($sql2);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Formulario Agregar Aprendiz</title>
</head>
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
  margin-top: 0px;
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
  padding: 1px;
  margin-bottom:5px;
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
label, input,select {

 
  font-size: 0.7em;
  font-family: Time-new-Roman;
</style>
<body>
  <br>
  <form  style="margin-top: -11px;border-radius: 20px;margin-left: 280px"id="form1" name="form1" method="post" action="Agregar.php">
      
        <center><td colspan="2" align="center" bgcolor="GRAY" style="color:white" >✬AGREGAR APRENDIZ✬</td></center>
      <label for="">Identificación:</label>
      <input type="int" required="" name="N_doc" maxlength="10" value="<?php if(isset($N_doc)) echo $N_doc ?>">
      <label for="">Ficha:</label>
        <td><label  for="PROGRAMA_Ficha_carac"></label>
          <select required name="PROGRAMA_Ficha_carac" id="PROGRAMA_Ficha_carac" size="0" style="width:325px" title="Ficha en la que se encuentra el aprendiz">
           
            <?php
            while ($PROGRAMA_Ficha_carac = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?>"><?php echo $PROGRAMA_Ficha_carac->Ficha_carac ?></option>
            <?php
            }

            ?>
          </select>


      <label for="">Tip_documento:</label>
          <select title="Tipo de documento del aprendiz" required name="Tip_doc" id="Tip_doc" type="enum" size="0" style="width:325px">
          
            <option value="C.C">C.C</option>
            <option value="T.I">T.I</option>
          </select></td>
        </td>
  <label for="">Nombres:</label>
          <input title="Nombres del aprendiz" maxlength="25" required name="Nombres" type="text" id="Nombres" size="40" /></td>
      </tr>
      <tr>
       <label for="">Apellidos:</label>
          <input title="Apellidos del aprendiz" maxlength="30" required name="Apellidos" type="text" id="Apellidos" size="40" /></td>
      </tr>
      <tr>
        <label for="">Teléfono:</label>
          <input title="Teléfono del aprendiz" maxlength="10" required name="Tel_apre" type="int" id="Tel_apre" size="40" /></td>
      </tr>
     <label for="">Correo_SENA:</label>
        <input value='@misena.edu.co' title="Correo SENA del aprendiz"  required name="Correo_SENA" type="email" id="Correo_SENA" size="40"placeholder="PaezT@misena.edu.co" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}+\.[a-z]{2,}$" /></td>
      </tr>
      <tr>
      <label for="">Correo_Pl:</label>
          <input value='@gmail.com' title="Correo personal del aprendiz" required name="Correo_Pl" type="email" id="Correo_Pl" size="40" placeholder="Adrian09@gmail.com" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"/></td>
        </td>
      </tr>
      <tr>
      <tr>
    <label for="">Estado:</label>


          <select title="Estado del aprendiz" required name="Estado_idEstado" id="Estado_idEstado" style="width:325px">
         

            <?php
            while ($Estado_idEstado = $resultado->fetch_object()) {
            ?>
              <option value="<?php echo $Estado_idEstado->idEstado ?>"><?php echo $Estado_idEstado->Nombre ?></option>
            <?php
            }

            ?>
          </select>
      </tr>
      

      <input type="submit" name="submit">
   
    </form>
</html>