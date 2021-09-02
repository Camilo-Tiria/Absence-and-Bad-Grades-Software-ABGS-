<?php
require "../Modelo/conexionBasesDatos.php";

extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");
if (!isset($_REQUEST['pg']))
  $pg="pgInicial";
$user=$_SESSION['user'];
$Cod_Nota ;
$APRENDIZ_Nota ;
$R_APRENDIZAJE_Code_Res;
$Nota;

$objConexion=Conectarse();

$sql="SELECT n. Cod_Nota,  n. R_APRENDIZAJE_Code_Res, n. Nota, n. N_doc , n. Area ,a. N_doc , a. Nombres, a. PROGRAMA_Ficha_carac, a. Correo_SENA ,r. Code_Res, r. Nom_Res FROM notas as n INNER JOIN aprendiz as a on n. N_doc= a. N_doc INNER JOIN r_aprendizaje as r on n. R_APRENDIZAJE_Code_Res = r. Code_Res and  n. Area = 'Técnico' and a. Correo_SENA = '$user' and a. N_doc = a. N_doc";

$resultado1 = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOTAS TÉCNICO</title>
<meta charset="utf-8">
</head>

<body>
<h1 align="center" style="margin-top: -3px;">NOTAS DE TÉCNICO</h1>
        <table class="table"  id="tabla1" width="60%" border="2" align="center">
    <thead style="color: white;">
    <th>Cod&nbsp;&nbsp;</th><th>Ficha&nbsp;&nbsp;</th><th>Aprendiz&nbsp;&nbsp;</th><th>R_Aprendizaje</th><th>Nota&nbsp;&nbsp;</th>
 </thead>
 <tbody>
  <?php
 while ($notas = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $notas->Cod_Nota ?></td>
          <td><?php  echo $notas->PROGRAMA_Ficha_carac ?></td>
         <td><?php  echo $notas->Nombres ?></td>
          <td><?php  echo $notas->Nom_Res ?></td>
           
           <td><?php  echo $notas->Nota ?></td>
  <?php
  }
  
  ?>
        </tbody>
 
  </table>

<!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <script>
    $(document).ready(function () {
            $('#tabla1').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar:", 
                    lengthMenu: "Agrupar por _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se han encontrado coincidencias",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 285,
                lengthMenu: [ [6, 25, -1], [6, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>


