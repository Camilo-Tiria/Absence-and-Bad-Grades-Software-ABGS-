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

$sql="Delete From notas Where Cod_Nota='$Cod_Nota'";

$resultado = $objConexion->query($sql);
if ($resultado){
	echo "<script>
                window.location= 'javascript:history.back()'
    </script>";
}
else 
   
     echo "<script>
                alert('LA NOTA NO SE HA PODIDO ELIMINAR');
                
                window.location= javascript:history.back()'
    </script>";


?>

</BODY>
</HTML>