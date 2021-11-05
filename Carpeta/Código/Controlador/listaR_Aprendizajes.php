<?php
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Proyecto_SENA/ABGS/?x=2");

require "../Modelo/conexionBasesDatos.php";

$objConexion=Conectarse();

$sql="select * from r_aprendizaje ";


$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultados de aprendizaje</title>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="paginacion.css?v=<?php echo(rand()); ?>" />
</head>
<head>
<meta charset="utf-8">
   
<body>
<h1 align="center">RESULTADOS DE APRENDIZAJE</h1>
<?php
  if ($r_aprendizaje = $resultado->fetch_object())
  {
  ?>
 <div class="row1">       
      <div class="col-md1">        
          <div class="card">
            <img class="card-img-top" src="https://images.squarespace-cdn.com/content/v1/5e1861e714c3a95c1749f79f/1580581705318-Z9O60K05NOGXD5BL8VNT/ferpal_cuaderno_color_gris.gif?format=1000w"> 
                     
            <div class="card-body">
              <center><h4 class="card-title">✬ÁREAS✬</h4></center>
          <br>
              <center><a  ></a></center>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="Entrar" value="Continuar &rarr;" id="bot" onclick="location='ListaR_AprendizajeArea.php'" />
               
   
              <style type="text/css">
                .row1{
                width:225px ;
                 height:130px ;
                 margin-left: 370px;
                 margin-top: 70px;
                 border:black 5px;
              }
              .card-img-top{
                 width:230px ;
                 height:150px ;
              }
              .bot{

              }
           
              </style>
            </div>
          </div>          
      </div>
    </div>  


      <?php
      }
  ?> 
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
                scrollY: 270,
                lengthMenu: [ [9, 25, -1], [9, 25, "Todo"] ],
            });
        });
    </script>
</body>
</html>








  
