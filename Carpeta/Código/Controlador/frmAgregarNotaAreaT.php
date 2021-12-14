<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Proyecto_SENA/ABGS/?x=2");
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="SELECT a. N_doc, a. PROGRAMA_Ficha_carac, a. Nombres, a. Apellidos, p. Ficha_carac, p. Trimestres from aprendiz as a Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac where p. Ficha_carac = $_REQUEST[Ficha_carac] "  ;
     
$resultado1 = $objConexion->query($sql);

?>
<!doctype html>
<html>
<head>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<title>ÁREAS/CALIFICACIONES</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="EstilosAparte.css?v=<?php echo(rand()); ?>" />
</head>
<body><body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover"><br>
<tbody>
  <?php
  if ($aprendiz = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC"></tr>

    <div class="container">   
    <CENTER><h1>ELIGE TU ÁREA</h1></CENTER>
    <div class="row1">       
    <div class="col-md1">        
    <div class="card">
    <img class="card-img-top" src="https://previews.123rf.com/images/maxkabakov/maxkabakov1504/maxkabakov150400593/38979004-education-concept-glowing-text-english-in-grunge-dark-room-with-dirty-floor-black-background-3d-rend.jpg"> 
                     
    <div class="card-body">
    <center><h4 class="card-title">INGLÉS</h4></center>
              <center><a href="frmAgregarNotaArea1.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row1{
                width:215px ;
                 height:150px ;
                 margin-left: 30px;
                 margin-top: 100px;
                 border:black 5px;
              }
              .card-img-top{
                 width:210px ;
                 height:100px ;
              }
              </style>
    </div>
    </div>          
    </div>
    </div>  

    <div class="row2">       
    <div class="col-md2">        
    <div class="card">
    <img class="card-img-top" src="http://www3.gobiernodecanarias.org/medusa/ecoblog/dhernavt/files/2015/06/cropped-balones.jpg">        
    <div class="card-body">
              <center><h4 class="card-title">C.FÍSICA</h4></center>
              <center><a href="frmAgregarNotaArea2.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row2{
                width:215px ;
                 height:150px ;
                 margin-left: 300px;
                 margin-top: -150px;
              }
              .card-img-top{
                 width:210px ;
                 height:100px ;
              }
              </style>
    </div>
    </div>          
    </div>
    </div>   

    <div class="row3">       
    <div class="col-md3">        
    <div class="card">
    <img class="card-img-top" src="https://www.linuxadictos.com/wp-content/uploads/programacion-guia.jpg">      
    <div class="card-body">
              <center><h4 class="card-title">TÉCNICO</h4></center>
              <center><a href="frmAgregarNotaArea3.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row3{
                width:215px ;
                 height:150px ;
                 margin-left: 570px;
                 margin-top: -150px;
     

              }
              .card-img-top{
                 width:210px ;
                 height:100px ;
              }
              </style>
    </div>
    </div>          
    </div>
    </div>   

    <div class="row4">       
    <div class="col-md4">        
    <div class="card">
    <img class="card-img-top" src="https://us.123rf.com/450wm/lawren/lawren1110/lawren111000018/10769746-concepto-de-trabajo-de-equipo-coloridos-mu%C3%B1ecos-sobre-fondo-negro-.jpg?ver=6">         
    <div class="card-body">
              <center><h4 class="card-title">PROMOVER</h4></center>
              <center><a href="frmAgregarNotaArea4.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              </tbody>
              <style type="text/css">
                .row4{
                width:215px ;
                 height:150px ;
                 margin-left: 840px;
                 margin-top: -150px;
              }
              .card-img-top{
                 width:210px ;
                 height:100px ;
              }
              .btn-primary{
                color: white;
                background-color: #9C9C9C;
                border-color: black;
              }
              </style>
    </div>
    </div>          
    </div>
    </div>   
<?php
  }
    else{
     echo "<script> swal.fire({
       title: '¡ATENCIÓN!',
       text: '¡No se encuentra ningún aprendiz registrado en la ficha  $_REQUEST[Ficha_carac]!',
       icon: 'warning',
       }).then(function(){
        window.location.href='/Proyecto_SENA/ABGS/Controlador/vistaPrincipalAsistencia.php?pg2=calificacionesficha';
        });
       </script>";   
}
  ?> 
</style>
</div>
<button  class="aparte"><a style="text-decoration: none;" href="javascript:history.back()" ><p style="margin-top:2%;margin-left: -5%" class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
</html>


