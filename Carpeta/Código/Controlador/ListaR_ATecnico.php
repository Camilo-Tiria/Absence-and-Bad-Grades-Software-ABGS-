<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");

 require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql="SELECT r. Code_Res,r. Area,r. Trimestre, r. Nom_Res  FROM r_aprendizaje as r WHERE  r. Area= 'Técnico'";

$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>R_APRENDIZAJE/TÉCNICO</title>
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
<h1 style="margin-top: 60px;" align="center">R_APRENDIZAJES TÉCNICO</h1>
    <div id="divContenido">
        <table  id="tabla4" class="table" style="margin-top: -1px;" border="2" align="center">
   <thead style="color: white;">
     <th>Cod&nbsp;&nbsp;</th><th>Nom_res</th><th>Área&nbsp;&nbsp;</th><th>Trimestre&nbsp;&nbsp;</th><th>Modificar&nbsp;&nbsp;</th><th>Eliminar&nbsp;&nbsp;</th><th>Agregar&nbsp;&nbsp;</th>
   </thead>
   <tbody>
  <?php
while ($r_aprendizaje= $resultado->fetch_object())
  {
  ?>
    </tr>
  <tr bgcolor="#CCCCCC">
       <td><?php  echo $r_aprendizaje->Code_Res ?></td>
        <td><?php  echo $r_aprendizaje->Nom_Res ?> </td>
        <td><?php  echo "Técnico" ?></td>
      <td><?php  echo $r_aprendizaje->Trimestre ?> </td>
      <td align="center"><a href="EditarR_ATecnico.php?Code_Res=<?php echo $r_aprendizaje->Code_Res?>"><p class="fas fa-color fa-cogs"></p></a></td>
    <td align="center"><a href="eliminarR_A.php?Code_Res=<?php echo $r_aprendizaje->Code_Res?>"  onclick="return confirm('¿Está seguro que desea eliminar el R_Aprendizaje <?php echo $r_aprendizaje->Code_Res ?>?');"><p class="fas fa-color2 fa-trash-alt "></p></a></td>
    <td align="center"><a href="frmAgregarR_ATecnico"><p class="fas fa-color fa-cogs"></p>
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
                    search: "Buscar R_Aprendizaje&nbsp;:", 
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
                lengthMenu: [ [ 9,10, 25, -1], [ 9,10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>
 </tbody>
 <div class="divbutton1">
<button class="bto"><a style="text-decoration: none;" href='javascript:history.back()' ><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
</table>
  
</div>
  <div id="divPiePagina"> <?php include "../Vista/piePagina.php";?></div>    
</div>
</body>
<div class="divbutton1">
<button class="bto"><a style="text-decoration: none;" href='javascript:history.back()' ><p class="fas fa-arrow-left fa-2x"></p></a></button>
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
            $('#tabla12').DataTable({
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
                scrollY: 275,
                lengthMenu: [ [10, 25, -1], [10, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>
