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
	header('location:vistaPrincipalAsistencia.php?pg2=listaR_Aprendizajes');
}
else 
   
     echo "<script>
                alert('R_A NO SE PUEDE ELIMINAR PORQUE SE ENCUENTRA EN USO');
                
                window.location= 'vistaPrincipalAsistencia.php'
    </script>";


?>

</BODY>
</HTML>