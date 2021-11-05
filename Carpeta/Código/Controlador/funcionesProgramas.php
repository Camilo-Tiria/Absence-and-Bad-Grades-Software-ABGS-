<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))
  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select * from programa ";


$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Programas</title>
<link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<meta charset="utf-8">
</head>

<body>
      <style type="text/css">
        .fa-color{color:black;}
        .fa-color:hover{color:white;}  
        .fa-color2{color:black;}
        .fa-color2:hover{color:#A20C0C;} 

      * {
  box-sizing: border-box;
}
body {
  background:  ;

  font-family: ;
}
    </style>  
    <br>
<h1 align="center"style="margin-top: -25px; ">EDITAR FICHAS</h1>

        <table class="table" id="tabla2" width="100%" border="2" align="center">
    <thead style="color: white;">
   <th>Ficha</th><th>Programa</th><th>Área</th><th>Inicio</th><th>Tipo_Formación</th><th>Jornada</th><th>N°Trimestres</th><th>Modalidad</th><th>Modificar</th><th>Eliminar</th>
   </thead>
   <tbody>
  <?php
  while ($programa = $resultado->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $programa->Ficha_carac ?></td>
        <td><?php  echo $programa->Nom_Program ?>     </td>
        <td><?php  echo $programa->Area?></td>
        <td><?php  echo $programa->Fecha_Ingr ?> </td>
        <td><?php  echo $programa->Tipo_Formacion ?></td>
         <td><?php  echo $programa->Jornada ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $programa->Trimestres ?></td>
        <td><?php  echo $programa->Modalidad  ?></td>

        <td align="center"><a href="EditarPrograma.php?Ficha_carac=<?php echo $programa->Ficha_carac?>"><p class="fas fa-color fa-cogs "></p></a></td>
        
        <td align="center"><a href="eliminarPrograma.php?Ficha_carac=<?php echo $programa->Ficha_carac?>"  onclick="return confirm('¿Está seguro que desea eliminar la Ficha <?php echo $programa->Ficha_carac ?>?');"><p class="fas fa-color2 fa-trash-alt "></p></a></td>
</tr>
         
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
            $('#tabla2').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar ficha&nbsp;:", 
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
                scrollY: 289,
                lengthMenu: [ [10, 25, -1], [10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>