<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_SESSION['user']))

  
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select * from programa ";


$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Programas</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<script language="javascript">
        function doSearch()
        {
            const tableReg = document.getElementById('datos');
            const searchText = document.getElementById('searchTerm').value.toLowerCase();
            let total = 0;
 
            for (let i = 1; i < tableReg.rows.length; i++) {
                if (tableReg.rows[i].classList.contains("noSearch")) {
                    continue;
                }
 
                let found = false;
                const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                for (let j = 0; j < cellsOfRow.length && !found; j++) {
                    const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                        found = true;
                        total++;
                    }
                }
                if (found) {
                    tableReg.rows[i].style.display = '';
                } else {
                    
                    tableReg.rows[i].style.display = 'none';
                }
            }
            const lastTR=tableReg.rows[tableReg.rows.length-1];
            const td=lastTR.querySelector("td");
            lastTR.classList.remove("hide", "red");
            if (searchText == "") {
                lastTR.classList.add("hide");
            } else if (total) {
                td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
            } else {
                lastTR.classList.add("red");
                td.innerHTML="No se han encontrado coincidencias";
            }
        }
    </script>
    <style>
        #datos {border:1px solid black;padding:10px;font-size:1em;}
        #datos tr:nth-child(even) {background:gray;}
        #datos td {padding:5px;}
        #datos tr.noSearch {background:White;font-size:0.8em;}
        #datos tr.noSearch td {padding-top:10px;text-align:right;}
        .hide {display:none; }
        .red {color:Red;}
    </style>
</head>
<body>
<h1 align="center">SELECCIONA LA FICHA</h1>
<form style="margin-left: 65px;">
        Busque una Ficha <input style="margin-bottom: 10px;" id="searchTerm" placeholder="Ficha, Nom_Programa..." type="text" onkeyup="doSearch()" />
    </form>
    <p>
        <table style="margin-left: 65px;" id="datos" width="89%" border="2" align="center">
 <tr align="center" bgcolor="GRAY" style="color:white" >
   <th>Ficha</th><th>Nom_Programa</th><th>Areas</th><th>Registros-Notas</th>
  </tr>
    <tr align="center" bgcolor="GRAY"style="color:white" >
  <?php
  while ($programa= $resultado->fetch_object())
  {
  ?>
    </tr>
  <tr bgcolor="#CCCCCC">
        <td><?php  echo $programa->Ficha_carac ?></td>
        <td><?php  echo $programa->Nom_Program ?>     </td>
        
         <td align="center"><a href="frmAgregarNotaArea.php?Ficha_carac=<?php echo $programa->Ficha_carac?>"><p class="fas fa-arrow fa-arrow-circle-right fa-1x"></p></a></td>
  
      <td align="center"><a href="registrosnotasArea.php?Ficha_carac=<?php echo $programa->Ficha_carac?>"><p class="fas fa-color fa-edit fa-1x"></p></a></td>

  <?php
  }
  ?>
   <tr class='noSearch hide'>
  <td colspan="50"></td>
  </tr>
</table>
<style type="text/css">
        .fa-arrow{color: black;}
        .fa-arrow:hover{
    color:#64BF0A ;
}   

        .fa-color{color: black;}
        .fa-color:hover{
    color:white ;
    </style> 
</body>
</html>
