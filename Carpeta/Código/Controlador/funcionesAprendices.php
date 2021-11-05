<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");
 
require "../Modelo/conexionBasesDatos.php";
$Estado_idEstado ;
$PROGRAMA_Ficha_carac ;
$INSTRUCTOR_Num_doc;
$Tip_doc;
$Nombres;
$Apellidos;
$Tel_apre;
$Correo_SENA;
$Correo_Pl;

$objConexion=Conectarse();

$sql="SELECT a. N_doc, a. Estado_idEstado,  a. PROGRAMA_Ficha_carac, a. Tip_doc, a. Nombres, a. Apellidos, a. Tel_apre, a. Correo_SENA, a. Correo_Pl, e. Nombre , e. idEstado, p. Ficha_carac from aprendiz as a INNER JOIN estado as e on a. Estado_idEstado=e. idEstado Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac where a. PROGRAMA_Ficha_carac = $_REQUEST[PROGRAMA_Ficha_carac]" ;
$resultado1 = $objConexion->query($sql);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  </body>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDITAR APRENDICES</title>
<link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
<link rel="stylesheet" href="estiloPrincipal.css?v=<?php echo(rand()); ?>" />

</head>
<body>
    
<body>
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
  </body>
</head>
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
</body>
<h1 style="margin-top: 60px;" align="center">EDITAR APRENDICES</h1>
<div id="divContenido">
      <table  id="tabla4" width="100%" class="table" border="2" align="center">
  <thead style="color: white;">
  <th>N_doc</th><th>Estado</th><th>Tip_doc</th><th>Nombres</th><th>Apellidos</th><th>Correo_SENA</th><th>Ficha</th><th>Modificar</th><th>Eliminar</th>
  </thead>
  <tbody>
  <?php
  while ($aprendiz = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $aprendiz->N_doc ?></td>
        <td><?php  echo $aprendiz->Nombre ?>     </td>
        <td><?php  echo $aprendiz->Tip_doc  ?> </td>
        <td><?php  echo $aprendiz->Nombres ?></td>
        <td><?php  echo $aprendiz->Apellidos  ?></td>
        <td><?php  echo $aprendiz->Correo_SENA ?></td>
        <td><?php  echo $aprendiz->PROGRAMA_Ficha_carac  ?>     </td>

        <td align="center"><a href="EditarAprendiz.php?N_doc=<?php echo $aprendiz->N_doc?>"><p class="fas fa-color fa-user-cog "></p></a></td>
        
        <td align="center"><a href="eliminarAprendiz.php?N_doc=<?php echo $aprendiz->N_doc?>" onclick="return confirm('¿Está seguro que desea eliminar al Aprendiz <?php echo  $aprendiz->Nombres?>?');"><p class="fas fa-color3 fa-user-times "></p></a></td> 
  <?php
  }
  ?>
  </tbody>
</table>
</div>
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    

<div class="divbutton1">
<button  class="bto"><a href="javascript:history.back()"><p class="fas fa-arrow-left fa-2x"></p></a></button>
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
                scrollY: 260,
                lengthMenu: [ [9,10, 25, -1], [9,10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>