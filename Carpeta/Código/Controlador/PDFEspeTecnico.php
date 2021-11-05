<?php
require "../fpdf/fpdf.php";
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
  $this->Image('../Imagenes/fondopdf.jpg', 0, 0, 610, 300  );

    $this->Image('../Imagenes/WATERMARKpdf.png',0,10,50);
    //$this->Image('../Imagenes/LogoFondo.png',78,10,110);
    // Arial bold 15
    $this->SetFont('Times','B',17);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    
    $this->Cell(130,80,'REGISTRO DE ASISTENCIA AREA TECNICO ',0,1,'C');
    // Salto de línea
    $this->Ln(-20);

    $this->Cell(20,10, 'Cod',0,0,'C',0);
    $this->Cell(34,10, 'N_doc',0,0,'C',0);
    $this->Cell(50,10, 'Nombres',0,0,'C',0);
    $this->Cell(38,10, 'Fecha',0,0,'C',0);
    $this->Cell(40,10, 'Observacion',0,0,'C',0);
    $this->Cell(30,10, 'Area',0,0,'C',0);
    $this->Cell(30,10, 'Ficha',0,1,'C',0);

}
    
// Pie de página
function Footer()
{
    $this->SetTextColor(149, 149, 149 );
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
    $this->Write(0,'CONTACTO                                                                                                                                                                                                                                                                                      DESARROLLADORES','BI');
     $this->Ln(3);
    $this->Write(3,'Email: lkcalderon46@misena.edu.co // catiria4@misena.edu.co                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         Camilo Tiria & Leidy Calderon');
     $this->Ln(0);
    $this->Write(5,'Telefonos: 320 447 3192 // 313 710 3188');
     $this->Ln(3);


  }
}
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");

require "../Modelo/conexionBasesDatos.php";



$Cod_Inas;
$N_doc;
$Fecha_Inas;
$Observaciones;

$sql="SELECT  i. Cod_Inas, i. N_doc, i. Fecha_Inas, i. Observaciones,i. Area, a. N_doc, a. Nombres, a. PROGRAMA_Ficha_carac  FROM inasistencia as i inner join  aprendiz as a on i. N_doc= a. N_doc where Area = 'Técnico' and a. N_doc = $_REQUEST[N_doc]";

$objConexion=Conectarse();

$resultado = $objConexion->query($sql);

$pdf = new PDF();
$pdf=new PDF('P','mm',array(300,260));
$pdf->AliasNbPages();
//$pdf->RotatedImage('../Imagenes/Logo2.png',85,60,40,16,45);
$pdf->AddPage();
$pdf->SetFont('Times','BI',16);
$pdf->setdrawcolor(142, 58, 254 );
$pdf->setLineWidth(0.5);
$pdf->Line(10,78.5,252,78.5);
$pdf->SetTextColor(0,0,0);
$pdf->SetTitle("PDF Asistencia Tecnico");
while($row = $resultado->fetch_assoc()){
  

    $pdf->setfillcolor(226, 226, 226 );
    $pdf->SetTextColor(30,30,30);
    $pdf->setdrawcolor(255,255,255);

    $pdf->Cell(20,10, $row['Cod_Inas'],1,0,'C',1);
    $pdf->Cell(34,10, $row['N_doc'],1,0,'C',1);
    $pdf->Cell(50,10, $row['Nombres'],1,0,'C',1);
    $pdf->Cell(38,10, $row['Fecha_Inas'],1,0,'C',1);
    $pdf->Cell(40,10, $row['Observaciones'],1,0,'C',1);
    $pdf->Cell(30,10, $row['Area'],1,0,'C',1);
    $pdf->Cell(30,10, $row['PROGRAMA_Ficha_carac'],1,0,'C',1);
    $pdf->Ln();

}


$pdf->Output();
?>