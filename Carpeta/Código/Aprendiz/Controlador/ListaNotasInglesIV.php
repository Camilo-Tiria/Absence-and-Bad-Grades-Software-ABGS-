<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
require "../Modelo/conexionBasesDatos.php";
$user=$_SESSION['user'];
$Cod_Nota ;
$APRENDIZ_Nota ;
$R_APRENDIZAJE_Code_Res;
$Nota;

$objConexion=Conectarse();

$sql="SELECT n. Cod_Nota,n. INSTRUCTOR_Num_doc,n. Trimestre,n. Nota, n. N_doc , n. Area ,a. N_doc , n. R_APRENDIZAJE_Code_Res,  a. Nombres, a. PROGRAMA_Ficha_carac, a. Correo_SENA ,r. Code_Res, r. Nom_Res, i.Num_doc, i. NombresI FROM notas as n INNER JOIN aprendiz as a on n. N_doc= a. N_doc INNER JOIN r_aprendizaje as r on n. R_APRENDIZAJE_Code_Res = r. Code_Res INNER JOIN instructor as i on n. INSTRUCTOR_Num_doc = i. Num_doc and  n. Area = 'Inglés' and a. Correo_SENA = '$user' where a. N_doc = a. N_doc and n. Trimestre = 'IV'";

$resultado1 = $objConexion->query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>REGISTROS INGLÉS</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="estiloprincipalaprendiz.css?v=<?php echo(rand()); ?>" />
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  </body>
</head>
<body>  
<style>
  #divPiePagina {
  position:absolute;
  left:0px;
  top:87%;
  height:13%;
  width: 100%;
  z-index:1;
background:linear-gradient(30deg, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );
     font-family: Time-new-Roman;
}</style>
<td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
</body>
</head>
<nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO ⟰ </a>
    <li><a href="vistaprincipalNotas.php?pg2=programas">MIS NOTAS ︾</a></li>
    <li><a href="vistaPrincipalMisAsistencias.php?pg2=programas1">ASISTENCIAS ︾</a></li>
    <li><a href="">logo ⟰</a></li>
    <li><a href="vistaPrincipalInstructores.php?pg2=Instructores">INSTRUCTORES ︾</a></li>
    <li><a href="VistaResultados.php?pg2=programas3">R_APRENDIZAJE ︾</a></li>
  </ul>
  </nav> 
<nav class="perfil"><ol>
    <li><center><i href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERFIL︙</i></center>
    <ol><li><a href="perfil.php?=Correo_SENA=<?=$_SESSION['user']?>">Mi Perfil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⍈</a></li>
    <li><a href="mapeo.php">Información&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✓</a></li>
    <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión&nbsp;&nbsp;&nbsp; ⇶</a></li></ol></li></tr>
    <tr>
    <td>&nbsp;</td>
    </tr><tr>  
    <td>&nbsp;</td>
    </tr>
    </nav>
</body>
<h1 style="margin-top: 60px;" align="center">REGISTROS NOTAS DE INGLÉS IV</h1>
<div id="divContenido">
<table  id="tabla4" class="table" style="margin-top: -1px;" border="2" align="center">
<thead style="color: white;">
<th>Cod&nbsp;&nbsp;</th><th>ID&nbsp;&nbsp;<th>Nombres&nbsp;&nbsp;</th></th><th>Ficha&nbsp;&nbsp;</th><th>R_Aprendizaje</th><th>Instructor</th><th>Área&nbsp;&nbsp;</th><th>Nota&nbsp;&nbsp;</th><th>Trimestre&nbsp;&nbsp;</th><th>Mensaje&nbsp;&nbsp;</th>
   </thead>
   <tbody>
  <?php
 while ($notas = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $notas->Cod_Nota ?></td>
        <td><?php  echo $notas->N_doc ?></td>
        <td><?php  echo $notas->Nombres ?></td>
        <td><?php  echo $notas->PROGRAMA_Ficha_carac ?></td> 
        <td><?php  echo $notas->Nom_Res ?></td>
        <td><?php  echo $notas->NombresI ?></td> 
        <td><?php  echo $notas->Area ?></td>
            <?php $color = $notas->Nota;
            switch ($color) {
              case '10' : $color1 = 'rgb(235, 143, 143)' ; break;
              case '20' : $color1 = 'rgb(235, 143, 143)' ; break;
              case '30' : $color1 = 'rgb(235, 143, 143)' ; break;
              case '40' : $color1 = 'rgb(198, 213, 126)' ; break;
              case '50' : $color1 = 'rgb(198, 213, 126)' ; break;
        }
        ?>
        <td style="background-color:<?php echo $color1 ?>" ><center><?php echo $notas->Nota ?></td>
        <td><center><?php  echo $notas->Trimestre ?></td>
        <td rowspan="1"><a style="text-decoration: none; " href='MensajesInglesIV.php?N_doc=<?php echo $notas->N_doc?>'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✉</td>
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
<button  class="bto"><a style="text-decoration: none;" href="javascript:history.back()"  ><p class="fas fa-arrow-left fa-2x"></p></a></button>
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
            $('#tabla4').DataTable({
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
                scrollY: 242,
                lengthMenu: [ [ 4,10, 25, -1], [ 4,10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>
 



