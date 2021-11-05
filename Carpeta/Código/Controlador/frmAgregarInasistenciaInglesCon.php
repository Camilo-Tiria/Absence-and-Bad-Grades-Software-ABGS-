<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");

 require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql="SELECT a. N_doc, a. PROGRAMA_Ficha_carac, a. Nombres, a. Apellidos, p. Ficha_carac from aprendiz as a Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac where p. Ficha_carac = $_REQUEST[PROGRAMA_Ficha_carac]";
$sql1 = "select Num_doc , NombresI, ApellidosI   from instructor where Area= 'Técnico' ";


$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="estiloprincipal.css?v=<?php echo(rand()); ?>" />
  </body>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASISTENCIA INGLÉS</title>
<body>
   <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
</head>
<body>
  <td><div  class="Logo"><a><img src="../Imagenes/Logo2.png"></a></div></td>
<nav class="Menu"><ul>
    <li><a href="vistaPrincipal.php?pg=pgInicial">INICIO </a>
    <li><a href="vistaPrincipalFichas.php?pg2=frmPrograma">FICHAS</a></li>
    <li><a href="vistaPrincipalAprendiz.php?pg3=frmAgregarAprendiz">APRENDICES</a></li>
    <li><a href="">logo</a></li>
    <li><a href="vistaPrincipalInstructor.php?pg3=listarInstructores">INSTRUCTORES</a></li>
    <li><a href="vistaPrincipalAsistencia.php?pg2=asistenciafichas">NOTAS-ASISTENCIA </a></li>
  </ul>
  </nav> 
  
<nav class="perfil"><ol>
    <li><i href="">PERFIL</i>
      <ol><li><a href="perfil.php?=Correo_SENA=<?=$_SESSION['user']?>">Mi Perfil</a></li>
  <li><a href="contacto.php">Contacto</a></li>
      <li><a href="listarmensajes.php">Mensajes</a></li>
      <li><a href="">Notificaciones</a></li>
    
      <li><a href="salir.php"  onclick="return confirm('¿Está seguro que desea Cerrar la Sesión?');">Cerrar Sesión</a></li></ol></li>

        </tr>

    
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>  
          <td>&nbsp;</td>
        </tr>
    </nav>
</i>


<h1 style="margin-top: 60px;" align="center">REGISTRAR ASISTENCIA DE INGLÉS I</h1><form method="post"> <input type="submit" name="agregar" value="Agregar " style="margin-left: 1133px; margin-top: -30px">
<div id="divContenido2">

<table  id="tabla8" width="100%" class="table" border="2" align="center">
  <thead style="color: white;"> 
   <th>N_doc</th><th>Nombres</th><th>Fecha</th><th>Observaciones</th><th>Área</th><th>Trimestre</th><th>Instructor</th>
   
</thead>
<form action="" id="form_insert" action="AgregarInasistencia.php">
<tbody>
  <?php
  while ($aprendiz= $resultado->fetch_object())
  {
  ?>
    </tr>
  <tr bgcolor="#CCCCCC">
        <td><input value="<?php echo $aprendiz->N_doc ?>" name="N_doc[]" size="0"></td>
        <td><?php  echo $aprendiz->Nombres ?></td>
         <td><label for="Fecha_Inas"></label>
    <input type="datetime" name="Fecha_Inas" step="1" min="2013-01-01T00:00Z" max="2013-12-31" name="Fecha_Inas[]" value="<?php echo date("Y-m-d");?>">
        </td>
        <td><label for="Observaciones"></label>
          <select title="Tipo de documento del aprendiz" required name="Observaciones[]" id="Observaciones" type="enum" size="0" style="width:125px">
            <option value="Tarde">Tarde</option>
            <option value="Falta">Falta</option>
              <option value="Asiste">Asiste</option>
                <option value="Retirado">Retirado</option>
                                <option value="Excusa">Excusa</option>
          </select></td>
        <td><input value="<?php echo 'Inglés' ?>" ></td>
         <td><input value="<?php echo 'I' ?>"></td>
        <td><input type="" name="" title="Instructor encargado/Técnico" required name="Instruc_Tecnico" id="Instruc_Tecnico" style="width:325px">
       
          <?php
          while ($Instruc_Tecnico = $resultado1->fetch_object()) {
          ?>
           
            
          <?php
          }

          ?>
        </select></td>
        
         
  <?php
  }
  ?>
  <script src="js/jquery-3.1.1.js"></script>
  <script src="js/main.js"></script>
   </tbody>
  </table>

</form>
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
            $('#tabla8').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar Aprendiz&nbsp;:", 
                    lengthMenu: "Agrupar por MENU items",
                    info: "Mostrando del item START al END de un total de TOTAL items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de MAX elementos en total)",
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
                lengthMenu: [ [9, 25, -1], [9, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>
