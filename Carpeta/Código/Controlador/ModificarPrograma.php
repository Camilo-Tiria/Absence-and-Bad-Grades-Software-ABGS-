<?php
include "../Modelo/conexionBasesDatos.php";

$Nom_Program=$_REQUEST["Nom_Program"];
$Ficha_carac=$_REQUEST["Ficha_carac"];
$Tipo_Formacion= $_REQUEST ["Tipo_Formacion"];
$Fecha_Ingr= $_REQUEST['Fecha_Ingr'];
$Jornada= $_REQUEST ["Jornada"];
$Trimestres= $_REQUEST ["Trimestres"];
$Modalidad= $_REQUEST ["Modalidad"];

$objConexion=Conectarse();

 $sql = "UPDATE programa SET  Nom_Program='$Nom_Program', Tipo_Formacion='$Tipo_Formacion', Fecha_Ingr= '$Fecha_Ingr', Jornada= '$Jornada', Trimestres= '$Trimestres',Modalidad='$Modalidad' WHERE Ficha_carac='$Ficha_carac'";

$resultado = $objConexion->query($sql);

if ($resultado){
	header('location:vistaPrincipalFichas.php?pg2=funcionesProgramas');
}
else
	{
 	echo "<script>
                alert('Por favor inserte todos los datos del formulario');
                
                window.location= 'javascript:history.back()'
    </script>";

}
?>


