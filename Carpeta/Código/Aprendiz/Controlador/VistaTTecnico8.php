<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:/Proyecto_SENA/ABGS/?x=2");
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="SELECT a. N_doc, a. PROGRAMA_Ficha_carac, a. Nombres, a. Apellidos, p. Ficha_carac from aprendiz as a Inner join programa as p on a. PROGRAMA_Ficha_carac = p. Ficha_carac where p. Ficha_carac = $_REQUEST[PROGRAMA_Ficha_carac] and Trimestres='8'" ;
     
$resultado1 = $objConexion->query($sql);

?>
<!doctype html>
<html>
<head>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
<title>ÁREAS/ASISTENCIAS</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover"><br>
<tbody>
  <?php
  if ($aprendiz = $resultado1->fetch_object())
  {
  ?>
  <tr bgcolor="#CCCCCC"></tr>

    <div class="container">   
    <CENTER><h1>TRIMESTRES EN C.FÍSICA</h1></CENTER>
    <div class="row1">       
    <div class="col-md1">        
    <div class="card">
    <img class="card-img-top" src="../Imagenes/trimes1.jpg"> 
    <div class="card-body">
              <center><a href="BoletinTecnicoI.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row1{
                width:212px ;
                 height:150px ;
                 margin-left: 30px;
                 margin-top: 50px;
                 border:black 5px;
              }
              .card-img-top{
                 width:212px ;
                 height:150px ;
              }
              </style>
    </div>
    </div>          
    </div>
    </div>  

    <div class="row2">       
    <div class="col-md2">        
    <div class="card">
    <img class="card-img-top" src="../Imagenes/trimes2.jpg">
    <div class="card-body">
              <center><a href="BoletinTecnicoII.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row2{
                width:212px ;
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
    <img class="card-img-top" src="../Imagenes/trimes3.jpg"> 
    <div class="card-body">
              <center><a href="BoletinTecnicoIII.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row3{
                width:212px ;
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
    <div class="col-md3">        
    <div class="card">
    <img class="card-img-top" src="../Imagenes/trimes4.jpg">
    <div class="card-body">
              <center><a href="BoletinTecnicoIV.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row4{
                width:212px ;
                 height:150px ;
                 margin-left: 840px;
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

    <div class="row5">       
    <div class="col-md3">        
    <div class="card">
    <img class="card-img-top" src="../Imagenes/trimes5.jpg">
    <div class="card-body">
              <center><a href="BoletinTecnicoV.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row5{
                width:212px ;
                 height:150px ;
                 margin-left: 30px;
                 margin-top: 80px;
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

    <div class="row6">       
    <div class="col-md3">        
    <div class="card">
    <img class="card-img-top" src="../Imagenes/trimes6.jpg">
    <div class="card-body">
              <center><a href="BoletinTecnicoVI.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row6{
                width:212px ;
                 height:150px ;
                 margin-left: 300px;
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
              </style>
    </div>
    </div>          
    </div>
    </div> 

    <div class="row7">       
    <div class="col-md3">        
    <div class="card">
    <img class="card-img-top" src="../Imagenes/trimes7.jpg">   
    <div class="card-body">
              <center><a href="BoletinTecnicoVII.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>"class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row7{
                width:212px ;
                 height:150px ;
                 margin-left: 569px;
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
              </style>
    </div>
    </div>          
    </div>
    </div> 

    <div class="row8">       
    <div class="col-md3">        
    <div class="card">
    <img class="card-img-top" src="../Imagenes/trimes8.jpg">
    <div class="card-body">
              <center><a href="BoletinTecnicoVIII.php?PROGRAMA_Ficha_carac=<?php echo $aprendiz->Ficha_carac?>" class="btn btn-primary">Entrar</a></center>
              <style type="text/css">
                .row8{
                width:212px ;
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
              </style>
    </div>
    </div>          
    </div>
    </div> 
    <?php
  }
  ?>  
</style>
<div id="divbutton1">
<button><a style="text-decoration: none;" href="javascript:history.back()"  ><i class="fas fa-arrow-left fa-2x"></i></a></button>
</div>
<style type="text/css">
#divbutton1 {
  position:absolute;
  left:80px;
  top:70px;
  width:69px;
  height:20px;
}
.fa-arrow-left{
  color:black;
}
.fa-arrow-left:hover
{
  color: #0B1594;
}
</style>
</html>