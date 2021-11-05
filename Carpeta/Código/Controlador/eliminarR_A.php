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

$sql="Delete From r_aprendizaje Where Code_Res='$Code_Res'";

$resultado = $objConexion->query($sql);
if ($resultado){
	echo "<script>
 window.location= 'javascript:history.back()'
    </script>";}
 else{
 	echo "<script>
                alert(NO SE PUDO ELIMINAR EL R_Aprendizaje');
                
                 window.location= 'javascript:history.back()'
    </script>";

}
?>

</BODY>
</HTML>