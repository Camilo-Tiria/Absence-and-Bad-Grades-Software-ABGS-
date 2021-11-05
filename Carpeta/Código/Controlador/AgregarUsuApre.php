<?php
include "../Modelo/conexionBasesDatos.php";

$Correo_SENA = $_POST['Correo_SENA'];
$usuPassword =$_POST['usuPassword'];
$ROL_id_rol=$_POST['ROL_id_rol'];
$usuPassword = hash('sha512', $usuPassword);

$objConexion = Conectarse();


$sql = "INSERT INTO  usuario (usuPassword,Correo_SENA,ROL_id_rol) 
values ('$usuPassword' ,'$Correo_SENA','$ROL_id_rol')";

$resultado = $objConexion->query($sql);


if ($resultado){
echo "<script>
                alert('Agregado Correctamente, siga con el proceso.');
                
                window.location= 'vistaPrincipalAprendiz.php?pg3=frmAgregarAprendiz'
    </script>";
}
else{
  echo "<script>
                alert('Ya existe un usuario con los datos ingresados, inténtelo de nuevo.');
                
                window.location= 'javascript:history.back()'
    </script>";
}
?>