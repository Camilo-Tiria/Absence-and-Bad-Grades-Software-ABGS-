<?php
require "../Modelo/conexionBasesDatos.php";
$Jornada=$_POST['Jornada'];

$objConexion=Conectarse();

$sql="SELECT Trimestres FROM jornada where NombreJ='$Jornada' ";

$resultado = $objConexion->query($sql);

$cadena="<label>Trimestres</label>
         <select id='Trimestres' name='Trimestres'>";

while($ver=mysqli_fetch_row($resultado)){
	$cadena=$cadena.'<option value='. $ver[0].'>'.utf8_encode($ver[0]).'</option>';
}
echo $cadena."</select>";

?>