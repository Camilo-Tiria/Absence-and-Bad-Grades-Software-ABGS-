<?php

 require "../Modelo/conexionBasesDatos.php";

 $objConexion=Conectarse();
 	
 $tipo       = $_FILES['dataCliente']['type'];
 $tamanio    = $_FILES['dataCliente']['size'];
 $archivotmp = $_FILES['dataCliente']['tmp_name'];
 $lineas     = file($archivotmp);
 $i = 0;

 foreach ($lineas as $linea ) {
 	$cantidad_registros=count($lineas);
 	$cantidad_regist_agregados = ($cantidad_registros - 1);

 	if ($i != 0){

 		$aprendiz = explode(";", $linea);

 		$N_doc                 =!empty($aprendiz[0]) ? ($aprendiz[0]) : '';
 		$Fecha_Inas            =!empty($aprendiz[1]) ? ($aprendiz[1]) : '';
 		$Observaciones         =!empty($aprendiz[2]) ? ($aprendiz[2]) : '';
 		$Area                  =!empty($aprendiz[3]) ? ($aprendiz[3]) : '';
 		$Trimestre             =!empty($aprendiz[4]) ? ($aprendiz[4]) : '';
 		$Instruct_Tecnico      =!empty($aprendiz[5]) ? ($aprendiz[5]) : '';

 		$insertar = "INSERT INTO inasistencia (
 		N_doc,
 		Fecha_Inas,
 		Observaciones,
 		Trimestre,
 		Area,
 		Instruc_Tecnico
 		) values (
 		'$N_doc' ,
 		'$Fecha_Inas',
 		'$Observaciones',
 		'$Trimestre',
 		'$Area',
 		'$Instruc_Tecnico'
 	)";
 	mysqli_query($objConexion, $insertar); 
 	}else{
 	echo "<script>
                alert('INSERCION INCORRECTA, VERIFIQUE SUS DATOS');
                
                window.location= 'javascript:history.back()'
    </script>";
}
}
?>

