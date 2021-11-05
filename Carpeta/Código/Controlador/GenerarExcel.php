<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="SELECT a. N_doc, a. PROGRAMA_Ficha_carac, a. Nombres, a. Apellidos, p. Ficha_carac from aprendiz as a Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac where p. Ficha_carac = $_REQUEST[PROGRAMA_Ficha_carac]";


$resultado = $objConexion->query($sql);


header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=Asistencia.xls");
?>
<table border="1">
	<caption>Agregar Asistencia</caption>
	<tr>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Documento</th>
		<th>&nbsp;&nbsp;Fecha_Inas</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;Observaciones&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;Area</th>
		<th>&nbsp;&nbsp;Trimestre</th>
		<th>&nbsp;&nbsp;Instructor</th>
	</tr>
	 <?php


  while ($aprendiz= $resultado->fetch_object())
  {
  ?>
		<tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $aprendiz->N_doc ?></td>

            
              

 
              <td><input  require name="Fecha_Inas[]" type="date" id="Fecha_Inas" ></td>
   
    <td><label for="Observaciones"></label>
     <select title="Tipo de documento del aprendiz" required name="Observaciones" id="Observaciones" type="enum" size="0" style="width:300px">
     <option value="Tarde">Tarde</option>
     <option value="Falta">Falta</option>
     <option value="Asiste">Asiste</option>
     <option value="Retirado">Retirado</option>
     <option value="Excusa">Excusa</option>
     </select></td>


     <td><label for="Area" id="Area"></label>
      
            <option value="Inglés">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingles</option>
        
        </td>
        
      
     <td><label for="Trimestre" id="Trimestre"></label>
          

            <option value="I">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I</option>
          
         </td>
         
          <td rowspan="1" ><input  require name="Instruc_Tecnico[]" type="int" id="Instruc_Tecnico">

        
        

	<?php } mysqli_free_result($resultado);?>
	</table>	
