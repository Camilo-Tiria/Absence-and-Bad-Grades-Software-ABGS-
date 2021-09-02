<?php
require "../Modelo/conexionBasesDatos.php";

extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");
if (!isset($_REQUEST['pg']))
  $pg="pgInicial";
$user=$_SESSION['user'];
$Cod_Inas;
$N_doc;
$Fecha_Inas;
$Observaciones;

$objConexion=Conectarse();

$sql="SELECT  i. Cod_Inas, i. N_doc, i. Fecha_Inas, i. Observaciones,i. Area, a. N_doc, a. Nombres,a. Correo_SENA, a. PROGRAMA_Ficha_carac  FROM inasistencia as i inner join  aprendiz as a on i. N_doc= a. N_doc where Area = 'C.Física' and a. Correo_SENA = '$user' and a. N_doc = a. N_doc";

$resultado1 = $objConexion->query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASISTENCIAS C.FÍSICA</title>
<meta charset="utf-8">
</head>

<body>
<h1 align="center" style="margin-top: -3px;">ASISTENCIAS DE C.FÍSICA</h1>
        <table class="table"  id="tabla1" width="60%" border="2" align="center">
    <thead style="color: white;">
     <th>Codigo</th><th>ID_Apre</th><th>Nom_Apre</th><th>Fecha</th><th>Ficha</th><th>Observaciones</th>
 </thead>
 <tbody>
  <?php
  while ($inasistencia = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC"> 
       <td><?php  echo $inasistencia->Cod_Inas ?></td>
         <td><?php  echo $inasistencia->N_doc ?></td>
        <td><?php  echo $inasistencia->Nombres ?></td>
        <td><?php  echo $inasistencia->Fecha_Inas ?></td>
        <td><?php  echo $inasistencia->PROGRAMA_Ficha_carac ?></td>
        <td><?php  echo $inasistencia->Observaciones ?></td>
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


