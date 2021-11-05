<?php  

 require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();

$sql = "select * FROM r_aprendizaje ";
$sql1 = "select Num_doc , NombresI, ApellidosI , Area from instructor  ";



$resultado = $objConexion->query($sql);
$resultado1 = $objConexion->query($sql1);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    
  </body>
  <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABSENCE AND BAD GRADES SOFTWARE</title>
<body>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  </body>
  <link rel="stylesheet"  href="estilos1.css">


<body>
  <form style="margin-top: 70px"; id="form1" name="form1" method="post" action="AgregarR_A.php">

        <center><td colspan="2" align="center" bgcolor="GRAY" style="color: white">✬AGREGAR R_APRENDIZAJE✬</td></center>
      </tr>
    
                  

      <tr>
         <td align="right" bgcolor="#EAEAEA">Área:</td>
      
     <td><label for="Area"></label>
           <select title="Tipo de documento del aprendiz" required name="Area" id="Area" type="enum" size="0" style="width:325px">

            <option value="Inglés">Inglés</option>
             <option value="C.Física">C.Física</option>
              <option value="Técnico">Técnico</option>
               <option value="Promover">Promover</option>
          </select></td>
        </td>
        <tr>
           <td align="right" bgcolor="#EAEAEA">Trimestre:</td>
      
     <td><label for="Area"></label>
           <select title="Tipo de documento del aprendiz" required name="Trimestre" id="Trimestre" type="enum" size="0" style="width:325px">

            <option value="I">I</option>
             <option value="II">II</option>
              <option value="III">III</option>
               <option value="IV">IV</option>
                 <option value="V">V</option>
                   <option value="VI">VI</option>
                        <option value="VII">VII</option>
                             <option value="VIII">VIII</option>
          </select></td>
        </td>

        <td align="right" bgcolor="#EAEAEA">Nombre: </td>
        <td><label for="Nom_Res"></label>
          <input title="Nom_Res" required name="Nom_Res" type="text" id="Nom_Res" size="0" style="width:325px" /></td>
      </tr>
      <tr>
         <br>
        </td>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="GRAY"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
  
  </form>
</body>



</div>
</html>