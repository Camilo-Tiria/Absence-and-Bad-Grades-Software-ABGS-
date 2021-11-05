<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");



require "../Modelo/conexionBasesDatos.php";

$Cod_Inas;
$N_doc;
$Fecha_Inas;
$Observaciones;

$sql="SELECT  i. Cod_Inas, i. N_doc,i. Trimestre, i. Fecha_Inas, i. Observaciones,i. Area, a. N_doc, a. Nombres, a. PROGRAMA_Ficha_carac  FROM inasistencia as i inner join  aprendiz as a on i. N_doc= a. N_doc where Area = 'Promover' and a. N_doc = $_REQUEST[N_doc] and i. Trimestre = 'VIII'";

$objConexion=Conectarse();
$resultado1 = $objConexion->query($sql);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>REGISTROS PROMOVER</title>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
  </body>
  
</head>
<body>
  
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
<nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO ⟰</a>
    <li><a href="vistaPrincipalFichas.php?pg2=frmPrograma">FICHAS ︾</a></li>
    <li><a href="vistaPrincipalAprendiz.php?pg3=frmAgregarAprendiz">APRENDICES ︾</a></li>
    <li><a href="">logo︾</a></li>
    <li><a href="vistaPrincipalInstructor.php?pg3=listarInstructores">INSTRUCTORES ︾</a></li>
    <li><a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas">REGISTROS ︾  </a></li>
  </ul>
  </nav> 
  
<nav class="perfil"><ol>

  
    <li><i href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERFIL︙</i>
      <ol><li><a href="perfil.php?=<?=$_SESSION['user']?>">Mi Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⍈</a></li>
  <li><a href="contacto.php">Contacto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;☏</a></li>
      <li><a href="listarmensajes.php">Mensajes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✉</a></li>
      <li><a href="">Notificaciones&nbsp;&nbsp;&nbsp;✓</a></li>
    
      <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li>

        </tr>

    
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>  
          <td>&nbsp;</td>
        </tr>
    </nav>
</i>
<body>
  <br>
  <br>
   <h1 style="margin-top: 30px;" align="center">REGISTROS PROMOVER VIII</h1>
  <div id="divContenido2">
        <table  id="tabla15" class="table" width="89%" border="2" align="center">
          <thead style="color: white">
   <th>Codigo</th><th>ID_Apre</th><th>Nom_Apre</th><th>Fecha</th><th>Ficha</th><th>Observaciones</th><th>Área</th><th>Trimestre</th><th>PDF</th><th>Eliminar</th>
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
      <?php $color = $inasistencia->Observaciones;
            switch ($color) {
             case 'Asiste' : $color1 = 'rgb(198, 213, 126)' ; break;
              case 'Falta' : $color1 = 'rgb(255, 192, 105)' ; break;
              case 'Tarde' : $color1 = 'rgb(255, 243, 178)' ; break;
              case 'Retirado' : $color1 = 'rgb(254, 143, 143)' ; break;
              case 'Excusa' : $color1 = 'rgb(215, 233, 247)' ; break;
            }
            ?>

           <td style="background-color:<?php echo $color1 ?>" > <?php echo $inasistencia->Observaciones ?></td>
          <td><?php  echo $inasistencia->Area ?></td>
               <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $inasistencia->Trimestre ?></td>
          <td rowspan="1"><a style="text-decoration: none; " href='PDFEspePromoverVIII.php?N_doc=<?php echo $inasistencia->N_doc?>'><p class="fas fa-colorpdf fa-download  "></p>Descargar PDF</a></td>
           <td align="center"><a href="EliminarAsistencia.php?Cod_Inas=<?php echo $inasistencia->Cod_Inas?>" onclick="return confirm('¿Está seguro que desea eliminar el registro del Aprendiz <?php echo  $inasistencia->Nombres?>?');"><p class="fas fa-color3 fa-user-times "></p></a></td>
      
     
       
  <?php
  }
  ?>
  </tbody>
</table>
</div>
  <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
</body>
<div class="divbutton1">
<button class="bto"><a style="text-decoration: none;" href="javascript:history.back()"  ><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
<!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <script>
    $(document).ready(function () {
            $('#tabla15').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar Aprendiz&nbsp;:", 
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
                scrollY: 270,
                lengthMenu: [ [10, 25, -1], [10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>








