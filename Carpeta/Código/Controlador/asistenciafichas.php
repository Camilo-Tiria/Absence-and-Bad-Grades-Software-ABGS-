<?php
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");

require "../Modelo/conexionBasesDatos.php";

$objConexion=Conectarse();

$sql="select * from programa ";


$resultado = $objConexion->query($sql);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Programas</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
</head>
<head>
<meta charset="utf-8">
   
<body>
<h1 style="margin-top: -7px; "align="center">ASISTENCIAS</h1>
<table  id="tabla" class="table" width="89%" border="2" align="center">
<thead style="color: white">
   <th>Ficha</th><th>Nom_Programa</th><th>Jornada</th><th>N°Trimestres</th><th>Registrar</th><th>Reporte_general</th><th>Reporte_especifico</th>
 </thead>
 <tbody>
  <?php
  while ($programa= $resultado->fetch_object())
  {
  ?>
    </tr>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $programa->Ficha_carac ?></td>
        <td><?php  echo $programa->Nom_Program ?></td>
         <td><?php  echo $programa->Jornada ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $programa->Trimestres ?></td>
         <td align="center"><a href="frmAgregarInasistenciaArea.php?Ficha_carac=<?php echo $programa->Ficha_carac?>"><p class="fas fa-arrow fa-arrow-circle-right fa-1x"></p></a></td>

         <td align="center"><a href="listaAsistenciasArea.php?Ficha_carac=<?php echo $programa->Ficha_carac?>"><p class="fas fa-color fa-edit fa-1x"></p></a></td>

         <td align="center"><a href="listaAsistenciasEArea.php?Ficha_carac=<?php echo $programa->Ficha_carac?>"><p class="fas fa-color fa-edit fa-1x"></p></a></td>
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
                scrollY: 275,
                lengthMenu: [ [10, 25, -1], [10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>