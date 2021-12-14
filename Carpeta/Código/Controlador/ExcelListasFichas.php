<?php
require "../Modelo/conexionBasesDatos.php";
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
$objConexion=Conectarse();
$sql="select * from programa where Estado= 'Activo' ";

$resultado = $objConexion->query($sql);

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=ListaFichas.xls");
?>

<table border="1" >
	<caption bgcolor="green">FICHAS REGISTRADAS</caption>
	<tr>
    <th bgcolor=#F0D9FF>Ficha</th>
    <th bgcolor=#F0D9FF>Programa</th>
    <th bgcolor=#F0D9FF>Area</th>
    <th bgcolor=#F0D9FF>Fecha</th>
    <th bgcolor=#F0D9FF>Formacion</th>
    <th bgcolor=#F0D9FF>Jornada</th>
    <th bgcolor=#F0D9FF>Trimestres</th>
    <th bgcolor=#F0D9FF>Modalidad</th>
    
	</tr>
	 <?php
   echo'Fecha de Reporte: '. date('d') . ' de '. date('F'). ' de '. date('Y');
   header("Content-Type:   application/vnd.ms-excel; charset=utf-8");

  while ($aprendiz= $resultado->fetch_object())
 
  {
  ?>
		<tr>
        <td><?php  echo $aprendiz->Ficha_carac ?></td>
        <td><?php  echo $aprendiz->Nom_Program ?>     </td>
        <td><?php  echo $aprendiz->Area?></td>
        <td><?php  echo $aprendiz->Fecha_Ingr ?> </td>
        <td ><?php  echo utf8_decode($aprendiz->Tipo_Formacion)?></td>
        <td><?php  echo $aprendiz->Jornada ?></td>
        <td><center><?php  echo $aprendiz->Trimestres ?></td>
        <td><?php  echo $aprendiz->Modalidad  ?></td> 

	<?php } mysqli_free_result($resultado);?>
	</table>	
