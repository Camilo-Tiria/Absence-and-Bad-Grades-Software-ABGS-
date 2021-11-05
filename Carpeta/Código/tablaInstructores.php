<?php
require "../Modelo/conexionBasesDatos.php";

$objConexion=Conectarse();

$sql2=  "select * from instructor, tipoinstructor where (instructor.TipoInstructor_idTipoInstructor=tipoinstructor.idTipoInstructor)";

$resultado = $objConexion->query($sql2);

$cantidadInstructores = $resultado->num_rows;

echo "<br> Cantidad de instructores en la Base de Datos es: ".$cantidadInstructores;
echo "<br>";
//imprimir en pantalla los datos del empleado
while ($instructor = $resultado->fetch_object())
{
	echo "<br> Identificacion Instructor: ".$instructor->Num_doc;
	echo "<br> Estado Instructor: ".$instructor->EstadoInstructor_idEstadoInstructor;
	echo "<br> Tipo Instructor: ".$instructor->TipoInstructor;
	echo "<br> Tipo de documento: ".$instructor->Tip_doc;
	echo "<br> Nombre instructor: ".$instructor->NombresI;
	echo "<br> Apellido instructor: ".$instructor->ApellidosI;	
	echo "<br> Telefono instructor: ".$instructor->Telefono;	
	echo "<br> Direccion instructor: ".$instructor->Direccion;	
	echo "<br> Correo_SENA: ".$instructor->Correo_corp;
	echo "<br> correo_Pl : ".$instructor->Correo_Pl;	
	echo "<br>";	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <body background= "../Imagenes/Maybe.png" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABSENCE AND BAD GRADES SOFTWARE</title>
<body>
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

</style>

?>