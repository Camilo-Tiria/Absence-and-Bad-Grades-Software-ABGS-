<?php
include "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql = "insert into usuario (usuPassword,usuLogin) 
values ('$_REQUEST[usuPassword]' ,'$_REQUEST[usuLogin]')";

$resultado = $objConexion->query($sql);
if ($resultado){
echo "<script>
                alert('Agregado Correctamente, siga con el proceso.');
                
                window.location= 'Formregis.php'
    </script>";
}
else{
  echo "<script>
                alert('Ya existe un usuario con los datos ingresados, inténtelo de nuevo.');
                
                window.location= 'FormularioPrincipal.php'
    </script>";
}
?>