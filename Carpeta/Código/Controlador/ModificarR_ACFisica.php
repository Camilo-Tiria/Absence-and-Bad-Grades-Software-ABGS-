<?php
include "../Modelo/conexionBasesDatos.php";

$Code_Res=$_REQUEST["Code_Res"];
$Nom_Res=$_REQUEST["Nom_Res"];



$objConexion=Conectarse();

 $sql = "UPDATE r_aprendizaje SET  Nom_Res='$Nom_Res'  WHERE Code_Res='$Code_Res'";

$resultado = $objConexion->query($sql);

if ($resultado){
	echo "<script>
                window.location= 'ListaR_AFisica.php '
    </script>";
}
else
	{
 	echo "<script>
                alert('Por favor inserte todos los datos del formulario');
                
                window.location= 'javascript:history.back()'
    </script>";

}
?>