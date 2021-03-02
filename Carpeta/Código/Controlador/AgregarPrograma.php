<?php
include "../Modelo/conexionBasesDatos.php";

$Ficha_carac = $_POST ["Ficha_carac"];
$Nom_Program = $_POST ["Nom_program"];
$Area = $_POST ["Area"];
$Fecha_Ingr= $_POST ["Fecha_Ingr"];
$Tipo_Formacion= $_POST ["Tipo_Formacion"];
$Modalidad= $_POST ["Modalidad"];

$objConexion=Conectarse();

$sql = "insert into programa (Ficha_carac,Nom_Program,Area,Fecha_Ingr,Tipo_Formacion,Modalidad)  
values ('$_REQUEST[Ficha_carac]' ,'$_REQUEST[Nom_program]','$_REQUEST[Area]','$_REQUEST[Fecha_Ingr]','$_REQUEST[Tipo_Formacion]'
,'$_REQUEST[Modalidad]')";

$resultado = $objConexion->query($sql);

if ($resultado){
	header('location:vistaPrincipalFichas.php?pg2=listarProgramas');
}
else{
	echo "<script>
                alert('LA FICHA NO SE PUEDE REGISTRAR PORQUE YA EXISTE');
                
                window.location= 'vistaPrincipalFichas.php'
    </script>";
}


?>