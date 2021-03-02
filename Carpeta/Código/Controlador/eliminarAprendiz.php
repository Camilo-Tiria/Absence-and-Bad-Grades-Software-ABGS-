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

$sql="Delete From aprendiz Where N_doc='$N_doc'";

$resultado = $objConexion->query($sql);
if ($resultado){
	header('location:vistaPrincipalAprendiz.php?pg3=funcionesAprendices');
}
else 
   
     echo "<script>
                alert('APRENDIZ NO SE PUEDE ELIMINAR PORQUE SE ENCUENTRA EN UNA FICHA');
                
                window.location= 'vistaPrincipalAprendiz.php'
    </script>";


?>

</BODY>
</HTML>