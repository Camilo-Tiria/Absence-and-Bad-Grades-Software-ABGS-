<?php
require "../Modelo/conexionBasesDatos.php";
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
$objConexion=Conectarse();

$sql="SELECT n. Cod_Nota,n. Trimestre,  n. R_APRENDIZAJE_Code_Res, n. Nota, n. N_doc , n. Area ,a. N_doc , a. Nombres,a. Apellidos, a. PROGRAMA_Ficha_carac, r. Code_Res, r. Nom_Res ,n. INSTRUCTOR_Num_doc, i. Num_doc, i. NombresI FROM notas as n INNER JOIN aprendiz as a on n. N_doc= a. N_doc INNER JOIN r_aprendizaje as r on n. R_APRENDIZAJE_Code_Res = r. Code_Res INNER JOIN instructor as i on i. Num_doc = n. INSTRUCTOR_Num_doc and  n. Area = 'C.Física' and n. Trimestre = 'IV' and a. N_doc = $_REQUEST[N_doc]";

$resultado = $objConexion->query($sql);

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=NotasEFisicaIV.xls");
?>
<table border="1" >
	<caption bgcolor="green">REGISTROS NOTAS DEL AREA C.FISICA IV TRIMESTRE</caption>
	<tr>
    <th bgcolor=#F0D9FF>ID_Apre</th>
    <th bgcolor=#F0D9FF>Nom_Apre</th>
    <th bgcolor=#F0D9FF>Apellido</th>
    <th bgcolor=#F0D9FF>Ficha</th>
    <th bgcolor=#F0D9FF>Resultado_de_Aprendizaje</th>
    <th bgcolor=#F0D9FF>Instructor</th>
    <th bgcolor=#F0D9FF>Area</th>
    <th bgcolor=#F0D9FF>Nota</th>
    <th bgcolor=#F0D9FF>Trimestre</th>
    
	</tr>
	 <?php
      echo'Fecha de Reporte: '. date('d') . ' de '. date('F'). ' de '. date('Y');
      header("Content-Type:   application/vnd.ms-excel; charset=utf-8");

  while ($notas= $resultado->fetch_object())
 
  {
  ?>
	  <tr>
      <td><?php  echo $notas->N_doc ?></td>
      <td><?php  echo utf8_decode($notas->Nombres)?></td>
      <td><?php  echo utf8_decode($notas->Apellidos)?></td>
      <td><?php  echo $notas->PROGRAMA_Ficha_carac ?></td>
      <td><center><?php  echo utf8_decode($notas->Nom_Res)?></td>
      <td><?php  echo utf8_decode($notas->NombresI)?></td>
      <td><?php  echo utf8_decode($notas->Area)?></td>
            <?php $color = $notas->Nota;
            switch ($color) {
              case '10' : $color1 = 'rgb(235, 143, 143)' ; break;
              case '20' : $color1 = 'rgb(235, 143, 143)' ; break;
              case '30' : $color1 = 'rgb(235, 143, 143)' ; break;
              case '40' : $color1 = 'rgb(198, 213, 126)' ; break;
              case '50' : $color1 = 'rgb(198, 213, 126)' ; break;
            }
            ?>
        <td style="background-color:<?php echo $color1 ?>" ><center><?php echo $notas->Nota ?></td>
        <td><center><?php  echo $notas->Trimestre ?></td>
	<?php } mysqli_free_result($resultado);?>
	</table>	

