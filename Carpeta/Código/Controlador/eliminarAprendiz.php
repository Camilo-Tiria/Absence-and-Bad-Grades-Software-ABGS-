<HTML>
<BODY>
<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();
$sql="Delete From aprendiz Where N_doc='$N_doc'";
$resultado = $objConexion->query($sql);
if ($resultado){
	echo "<script>
                window.location= 'javascript:history.back()'
    </script>";
}
else 
     echo "<script>
  alert('NO SE PUEDE ELIMINAR ');
                window.location= 'javascript:history.back()'
    </script>";
?>
</BODY>
</HTML>