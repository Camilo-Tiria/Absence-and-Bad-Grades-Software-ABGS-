<HTML>
<HEAD>
<TITLE>Borrar2.php</TITLE>
</HEAD>
<BODY>
<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
//Creamos la sentencia SQL y la ejecutamos

$objConexion=Conectarse();

$sql="Delete From instructor Where Num_doc='$Num_doc'";

$resultado = $objConexion->query($sql);
if ($resultado){
	header('location:vistaPrincipalInstructor.php?pg3=listarInstructores');
}
else 
   
     echo "<script>
                alert('EL INSTRUCTOR NO SE PUEDE ELIMINAR PORQUE SE ENCUENTRA REGISTRADO EN UNA FICHA');
                
                window.location= 'vistaPrincipalInstructor.php'
    </script>";


?>

</BODY>
</HTML>