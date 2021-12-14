<?php
require "../Modelo/conexionBasesDatos.php";
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
$objConexion=Conectarse();
$sql="SELECT a. N_doc, a. Estado_idEstado, a. PROGRAMA_Ficha_carac, a. Tip_doc, a. Nombres, a. Apellidos, a. Tel_apre, a. Correo_SENA, a. Correo_Pl, e. Nombre , e. idEstado, p. Ficha_carac from aprendiz as a INNER JOIN estado as e on a. Estado_idEstado=e. idEstado  Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac and a. Estado_idEstado= 1 where p. Ficha_carac = $_REQUEST[PROGRAMA_Ficha_carac]" ;

$resultado = $objConexion->query($sql);

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=ListaAprendices.xls");
?>
<table border="1" >
	<caption bgcolor="green">LISTA DE APRENDICES</caption>
	<tr>
    <th bgcolor=#F0D9FF>N_doc</th>
    <th bgcolor=#F0D9FF>Estado</th>
    <th bgcolor=#F0D9FF>Doc</th>
    <th bgcolor=#F0D9FF>Nombres</th>
    <th bgcolor=#F0D9FF>Apellidos</th>
    <th bgcolor=#F0D9FF>Tel_apre</th>
    <th bgcolor=#F0D9FF>Correo_SENA</th>
    <th bgcolor=#F0D9FF>Correo_Pl</th>
    <th bgcolor=#F0D9FF>Ficha</th>
    

	</tr>
	 <?php
      echo'Fecha de Reporte: '. date('d') . ' de '. date('F'). ' de '. date('Y');
      header("Content-Type:   application/vnd.ms-excel; charset=utf-8");

  while ($aprendiz= $resultado->fetch_object())
 
  {
  ?>
		<tr>
             <td><?php  echo $aprendiz->N_doc?></td>
        <td><?php  echo utf8_decode($aprendiz->Nombre)?></td>
        <td><?php  echo $aprendiz->Tip_doc?></td>
        <td><?php  echo utf8_decode($aprendiz->Nombres)?></td>
        <td><?php  echo utf8_decode($aprendiz->Apellidos)?></td>
        <td><?php  echo $aprendiz->Tel_apre?></td>
        <td><?php  echo utf8_decode($aprendiz->Correo_SENA)?></td>
        <td><?php  echo utf8_decode($aprendiz->Correo_Pl)?></td>
        <td><?php  echo $aprendiz->PROGRAMA_Ficha_carac?></td>

	<?php } mysqli_free_result($resultado);?>
	</table>	
