<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");


require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql="SELECT i. Num_doc, i. TipoInstructor_idTipoInstructor, i. EstadoInstructor_idEstadoInstructor, i. Tip_doc, i. Direccion, i. NombresI, i. ApellidosI, i. Telefono, i. Direccion, i. Correo_corp, i. Correo_Pl, i. Area, t. TipoInstructor , t. idTipoInstructor , e. idEstadoInstructor , e. EstadoInstruc from instructor as i INNER JOIN estadoinstructor as e on i. EstadoInstructor_idEstadoInstructor=e. idEstadoInstructor INNER JOIN tipoinstructor as t on i. TipoInstructor_idTipoInstructor= t. idTipoInstructor";

$resultado1 = $objConexion->query($sql);

     
$resultado1 = $objConexion->query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>INSTRUCTORES</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
  </body>
</head>
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
<h1 style="margin-top: 60px;" align="center">EDITAR INSTRUCTORES</h1>
    <div id="divContenido">
        <table  id="tabla4" class="table" style="margin-top: -1px;" border="2" align="center">
   <thead style="color: white;">
    <th>N_doc</th><th>Tipo</th><th>Estado&nbsp;</th><th>Doc&nbsp;</th><th>Nombres&nbsp;</th><th>Apellidos</th><th>Teléfono</th><th>Dirección</th><th>Correo_SENA</th><th>Área</th><th>Ir&nbsp;</th><th>Eliminar</th>
   </thead>
   <tbody>
  <?php
 while ($instructor = $resultado1->fetch_object())
  {
  ?>

  <tr bgcolor="#CCCCCC">
        <td><?php  echo $instructor->Num_doc ?></td>
        <td><?php  echo $instructor->TipoInstructor ?>     </td>
        <td><?php  echo $instructor->EstadoInstruc?></td>
        <td><?php  echo $instructor->Tip_doc  ?> </td>
        <td><?php  echo $instructor->NombresI ?></td>
        <td><?php  echo $instructor->ApellidosI  ?></td>
        <td><?php  echo $instructor->Telefono ?></td>
          <td><?php  echo $instructor->Direccion ?></td>
        <td><?php  echo $instructor->Correo_corp ?></td>
         <td><?php  echo $instructor->Area ?></td>

        <td align="center"><a href="EditarInstructor.php?Num_doc=<?php echo $instructor->Num_doc?>"><p class="fas fa-color fa-user-cog "></p></a></td>
        
        <td align="center"><a href="eliminarInstructor.php?Num_doc=<?php echo $instructor->Num_doc?>" onclick="return confirm('¿Está seguro que desea eliminar al Instructor <?php echo $instructor->NombresI?>?');"><p class="fas fa-color3 fa-user-times "></p></a></td>
      </tr>
     
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
<button  class="bto"><a style="text-decoration: none;" href="vistaPrincipalAprendiz.php?pg3=listarProgramas1"  ><p class="fas fa-arrow-left fa-2x"></p></a></button>
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
                scrollY: 262,
                lengthMenu: [ [ 7,10, 25, -1], [ 7,10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>
 </tbody>
</table></center> 
<div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
</body>
<div class="divbutton1">
<button  class="bto"><a style="text-decoration: none;" href="vistaPrincipalInstructor.php?pg3=listarInstructores"  ><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>

