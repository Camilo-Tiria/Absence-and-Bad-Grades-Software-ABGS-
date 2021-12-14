<?php
require "../Modelo/conexionBasesDatos.php";
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
$objConexion=Conectarse();
$sql="SELECT i. Cod_Inas, i. N_doc, i. Fecha_Inas, i. Observaciones, i. Area, i. Trimestre, i. Instruc_Tecnico, ie. Num_doc, ie. NombresI, a. N_doc, a. Nombres, a. PROGRAMA_Ficha_carac FROM inasistencia as i inner join aprendiz as a on i. N_doc= a. N_doc inner join instructor as ie on ie. Num_doc = i. Instruc_Tecnico and i. Area = 'Promover' and i. Trimestre = 'VII' where a. N_doc = $_REQUEST[N_doc] ";

$resultado = $objConexion->query($sql);

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=RegistrosEPromoverVII.xls");
?>
<table border="1" >
	<caption bgcolor="green">REGISTROS DEL AREA PROMOVER VII TRIMESTRE</caption>
	<tr>
    <th bgcolor=#F0D9FF>Codigo</th>
    <th bgcolor=#F0D9FF>ID_Apre</th>
    <th bgcolor=#F0D9FF>Nom_Apre</th>
    <th bgcolor=#F0D9FF>Fecha</th>
    <th bgcolor=#F0D9FF>Ficha</th>
    <th bgcolor=#F0D9FF>Instructor_Tecnico</th>
    <th bgcolor=#F0D9FF>Observaciones</th>
    <th bgcolor=#F0D9FF>Area</th>
    <th bgcolor=#F0D9FF>Trimestre</th>
	</tr>
	 <?php
      echo'Fecha de Reporte: '. date('d') . ' de '. date('F'). ' de '. date('Y');
      header("Content-Type:   application/vnd.ms-excel; charset=utf-8");

  while ($inasistencia= $resultado->fetch_object())
  {
  ?>
		<tr>
        <td><?php  echo $inasistencia->Cod_Inas ?></td>
        <td><?php  echo $inasistencia->N_doc ?></td>
        <td><?php  echo utf8_decode($inasistencia->Nombres)?></td>
        <td><?php  echo $inasistencia->Fecha_Inas ?></td>
        <td><?php  echo $inasistencia->PROGRAMA_Ficha_carac ?></td>
        <td><?php  echo utf8_decode($inasistencia->NombresI)?></td>
        <?php $color = $inasistencia->Observaciones;
            switch ($color) {
              case 'Asiste' : $color1 = 'rgb(198, 213, 126)' ; break;
              case 'Falta' : $color1 = 'rgb(255, 200, 152)' ; break;
              case 'Tarde' : $color1 = 'rgb(255, 243, 178)' ; break;
              case 'Retirado' : $color1 = 'rgb(254, 143, 143)' ; break;
              case 'Excusa' : $color1 = 'rgb(215, 233, 247)' ; break;
            }
            ?>
        <td style="background-color:<?php echo $color1 ?>" > <?php echo $inasistencia->Observaciones ?></td>
        <td><center><?php  echo utf8_decode($inasistencia->Area)?></td>
        <td><center><?php  echo $inasistencia->Trimestre ?></td>
	<?php } mysqli_free_result($resultado);?>
	</table>	
