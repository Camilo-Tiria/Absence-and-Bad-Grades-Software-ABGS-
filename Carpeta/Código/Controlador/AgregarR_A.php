<?php
include "../Modelo/conexionBasesDatos.php";

$Area= $_POST ["Area"];
$Trimestre= $_POST ["Trimestre"];
$Nom_Res= $_POST ["Nom_Res"];

$objConexion=Conectarse();

$sql = "insert into r_aprendizaje (Area,Trimestre,Nom_Res)  
values ('$_REQUEST[Area]','$_REQUEST[Trimestre]','$_REQUEST[Nom_Res]')";

$resultado = $objConexion->query($sql);

if ($resultado){

    	echo "<script>
                window.location= 'javascript:history.back()'
    </script>";}
 else
 {
 	echo "<script>
                alert('INSERCION INCORRECTA, VERIFIQUE SUS DATOS');
                
                window.location= 'javascript:history.back()'
    </script>";

}
?>
