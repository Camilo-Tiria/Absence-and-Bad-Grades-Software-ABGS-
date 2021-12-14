<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");
if (!isset($_REQUEST['pg2']))
  $pg2="pgInicial2";
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$user=$_SESSION['user'];


$aprendiz="SELECT u. Correo_SENA, a. PROGRAMA_Ficha_carac, a. Correo_SENA, a. Correo_Pl, p. Ficha_carac, p. Nom_Program, p. Jornada, p. Trimestres from aprendiz as a INNER JOIN  programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac INNER JOIN usuario as u on  a .Correo_SENA=u. Correo_SENA where a. Correo_SENA = '$user' "; 

$resultado = $objConexion->query($aprendiz);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOTAS</title>
<link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        .fa-arrow{color: black;}
        .fa-arrow:hover{
    color:#64BF0A ;
}   
   * {
  box-sizing: border-box;
}
body {
  background:  ;

}
</style> 
<h1 style="margin-top: 20px; "align="center">REGISTROS DE NOTAS</h1>
<table  id="tabla" class="table" width="39%" border="2" align="center">
<thead style="color: white">
<th>Ficha</th><th>Nom_Programa</th><th>Jornada</th><th>N°Trimestres</th><th>Ir</th>
</thead>
<tbody>
  <?php
  while ($programa= $resultado->fetch_object())
  {
  ?>
    </tr>
    <tr bgcolor="#CCCCCC">
    <td><?php  echo $programa->PROGRAMA_Ficha_carac ?></td>
    <td><?php  echo $programa->Nom_Program ?></td>
    <td><?php  echo $programa->Jornada ?></td>
    <td><center><?php  echo $programa->Trimestres ?></td>
    <td align="center"><a href="Areasnotas.php?PROGRAMA_Ficha_carac=<?php echo $programa->PROGRAMA_Ficha_carac?>"><p class="fas fa-arrow fa-arrow-circle-right fa-1x"></p></a></td>
    </tr>
  <?php
  }
  ?>
 </tbody>
</table>
<style type="text/css">
        .fa-arrow{color: black;}
        .fa-arrow:hover{
    color:#64BF0A ;
}   
        .fa-color{color: black;}
        .fa-color:hover{
    color:white ;
    </style> 
<!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <script>
    $(document).ready(function () {
            $('#tabla').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar Ficha&nbsp;:", 
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
                scrollY: 235,
                lengthMenu: [ [10, 25, -1], [10, 25, "Todo"] ],
            });
        });
    </script>
 </body>
 </html>