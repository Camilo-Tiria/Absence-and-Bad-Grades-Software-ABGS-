<?php
include "../Modelo/conexionBasesDatos.php";

$Ficha_carac = $_POST ["Ficha_carac"];
$Nom_Program = $_POST ["Nom_Program"];
$Area = $_POST ["Area"];
$Fecha_Ingr= $_POST ["Fecha_Ingr"];
$Tipo_Formacion= $_POST ["Tipo_Formacion"];
$Jornada= $_POST ["Jornada"];
$Trimestres= $_POST ["Trimestres"];
$Modalidad= $_POST ["Modalidad"];

$objConexion=Conectarse();

$sql = "insert into programa (Ficha_carac,Nom_Program,Area,Fecha_Ingr,Tipo_Formacion,Jornada,Trimestres,Modalidad)  
values ('$_REQUEST[Ficha_carac]' ,'$_REQUEST[Nom_Program]','$_REQUEST[Area]','$_REQUEST[Fecha_Ingr]','$_REQUEST[Tipo_Formacion]'
,'$_REQUEST[Jornada]','$_REQUEST[Trimestres]','$_REQUEST[Modalidad]')";

$resultado = $objConexion->query($sql);

if ($resultado){
	header('location:vistaPrincipalFichas.php?pg2=listarProgramas');
}
else{
 	echo "<script>
                alert('INSERCION INCORRECTA, VERIFIQUE SUS DATOS');
                
                window.location= 'javascript:history.back()'
    </script>";
}
?>