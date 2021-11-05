<HTML>
<BODY>
<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();
$sql="Delete From programa Where Ficha_carac='$Ficha_carac'";
$resultado = $objConexion->query($sql);
if ($resultado){
	header('location:vistaPrincipalFichas.php?pg2=funcionesProgramas');
}
else 
     echo "<script>
                alert('LA FICHA NO SE PUEDE ELIMINAR PORQUE SE ENCUENTRA EN USO');
                
                window.location= 'vistaPrincipalFichas.php?pg2=funcionesProgramas'
    </script>";
?>
</BODY>
</HTML>