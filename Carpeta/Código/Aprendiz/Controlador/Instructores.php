<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))
  header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2"); 
  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$sql="SELECT i. Num_doc, i. TipoInstructor_idTipoInstructor, i. EstadoInstructor_idEstadoInstructor, i. Tip_doc, i. NombresI, i. ApellidosI, i. Telefono, i. Direccion, i. Correo_corp, i. Correo_Pl, i. Area, t. TipoInstructor , t. idTipoInstructor , e. idEstadoInstructor , e. EstadoInstruc from instructor as i INNER JOIN estadoinstructor as e on i. EstadoInstructor_idEstadoInstructor=e. idEstadoInstructor INNER JOIN tipoinstructor as t on i. TipoInstructor_idTipoInstructor= t. idTipoInstructor";

$objConexion=Conectarse();   
$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Instructores:</title>
  <link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
  
</head>
<body>
<h1 style="margin-top: -2px; "align="center">INSTRUCTORES</h1>
        <table id="tabla5" width="100%" class="table" border="2" align="center">
      <thead style="color: white; overflow: auto;" >
   <th>N_doc</th><th>Tipo</th><th>Estado</th><th>Tip_doc</th><th>Nombres</th><th>Apellidos</th><th>Teléfono</th><th>Correo_SENA</th><th>Área</th>
   </thead>
   <tbody>
  <?php
  while ($instructor = $resultado->fetch_object())
  {
  ?>
    </tr> 
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $instructor->Num_doc ?></td>
        <td><?php  echo $instructor->TipoInstructor ?>     </td>
        <td><?php  echo $instructor->EstadoInstruc?></td>
        <td><?php  echo $instructor->Tip_doc  ?> </td>
        <td><?php  echo $instructor->NombresI ?></td>
        <td><?php  echo $instructor->ApellidosI  ?></td>
        <td><?php  echo $instructor->Telefono ?></td>
        <td><?php  echo $instructor->Correo_corp ?></td>
         <td><?php  echo $instructor->Area ?>  </td>

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
            $('#tabla5').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar Instructor&nbsp;:", 
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
                scrollY: 269,
                lengthMenu: [ [9,10, 15, -1], [9,10, 15, "Todo"] ],
            });
        });
    </script>
</body>
</html>