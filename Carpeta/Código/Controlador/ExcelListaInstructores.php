<?php
require "../Modelo/conexionBasesDatos.php";
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
$objConexion=Conectarse();
$sql="SELECT i. Num_doc, i. TipoInstructor_idTipoInstructor, i. EstadoInstructor_idEstadoInstructor, i. Tip_doc, i. NombresI, i. ApellidosI, i. Telefono, i. Direccion, i. Correo_corp, i. Correo_Pl, i. Area, t. TipoInstructor , t. idTipoInstructor , e. idEstadoInstructor , e. EstadoInstruc from instructor as i INNER JOIN estadoinstructor as e on i. EstadoInstructor_idEstadoInstructor=e. idEstadoInstructor INNER JOIN tipoinstructor as t on i. TipoInstructor_idTipoInstructor= t. idTipoInstructor AND i. EstadoInstructor_idEstadoInstructor = 1";

$resultado = $objConexion->query($sql);

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=ListaInstructores.xls");
?>
<table border="1" >
	<caption bgcolor="green">LISTA DE INSTRUCTORES</caption>
	<tr>
    <th bgcolor=#F0D9FF>N_doc</th>
    <th bgcolor=#F0D9FF>Tipo</th>
    <th bgcolor=#F0D9FF>Estado</th>
    <th bgcolor=#F0D9FF>Doc</th>
    <th bgcolor=#F0D9FF>Nombres</th>
    <th bgcolor=#F0D9FF>Apellidos</th>
    <th bgcolor=#F0D9FF>Telefono</th>
    <th bgcolor=#F0D9FF>Correo_SENA</th>
    <th bgcolor=#F0D9FF>Correo_Pl</th>
    <th bgcolor=#F0D9FF>Area</th>
	</tr>
	<?php
      echo'Fecha de Reporte: '. date('d') . ' de '. date('F'). ' de '. date('Y');
      header("Content-Type:   application/vnd.ms-excel; charset=utf-8");

  while ($instructor= $resultado->fetch_object())
 
  {
  ?>
		<tr>
        <td><?php  echo $instructor->Num_doc ?></td>
        <td><?php  echo $instructor->TipoInstructor ?>     </td>
        <td><?php  echo $instructor->EstadoInstruc?></td>
        <td><?php  echo $instructor->Tip_doc  ?> </td>
        <td><?php  echo utf8_decode($instructor->NombresI)?></td>
        <td><?php  echo utf8_decode($instructor->ApellidosI)?></td>
        <td><?php  echo $instructor->Telefono ?></td>
        <td><?php  echo utf8_decode($instructor->Correo_corp)?></td>
        <td><?php  echo utf8_decode($instructor->Correo_Pl)?></td>
        <td><?php  echo utf8_decode($instructor->Area)?></td>

	<?php } mysqli_free_result($resultado);?>
	</table>	
