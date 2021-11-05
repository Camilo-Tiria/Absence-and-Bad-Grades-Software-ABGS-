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
    
    $this->Cell(130,80,'REGISTRO DE NOTAS AREA INGLES ',0,0,'C');
        $this->Cell(-339,110,'TRIMESTRE: I ',0,1,'C');
  
    // Salto de línea
    $this->Ln(-50);


    $this->Cell(20,10, 'Cod',0,0,'C',0);
    $this->Cell(34,10, 'N_doc',0,0,'C',0);
    $this->Cell(50,10, 'Nombres',0,0,'C',0);
    $this->Cell(30,10, 'Ficha',0,0,'C',0);
    $this->Cell(57,10, 'R_Apre',0,0,'C',0);
    $this->Cell(36,10, 'Instructor',0,0,'C',0);
    $this->Cell(10,10, 'Nota',0,1,'C',0);
    

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
    $this->Write(0,'CONTACTO                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               DESARROLLADORES');
     $this->Ln(4);
    $this->Write(2,'Email: lkcalderon46@misena.edu.co // catiria4@misena.edu.co                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Camilo Tiria & Leidy Calderon');
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


$sql="SELECT n. Cod_Nota,n. Trimestre,  n. R_APRENDIZAJE_Code_Res, n. Nota, n. N_doc , n. Area ,a. N_doc , a. Nombres, a. PROGRAMA_Ficha_carac, r. Code_Res, r. Nom_Res ,n. INSTRUCTOR_Num_doc, i. Num_doc, i. NombresI FROM notas as n INNER JOIN aprendiz as a on n. N_doc= a. N_doc INNER JOIN r_aprendizaje as r on n. R_APRENDIZAJE_Code_Res = r. Code_Res INNER JOIN instructor as i on i. Num_doc = n. INSTRUCTOR_Num_doc and  n. Area = 'Inglés' and a. PROGRAMA_Ficha_carac = $_REQUEST[PROGRAMA_Ficha_carac] and n. Trimestre = 'I'";




$objConexion=Conectarse();

$resultado = $objConexion->query($sql);

$pdf = new PDF();
$pdf=new PDF('P','mm',array(300,262));
$pdf->AliasNbPages();
//$pdf->RotatedImage('../Imagenes/Logo2.png',85,60,40,16,45);
$pdf->AddPage();
$pdf->SetFont('Times','BI',16);
$pdf->setdrawcolor(142, 58, 254 );
$pdf->setLineWidth(0.5);
$pdf->Line(10,78.5,252,78.5);
$pdf->SetTextColor(0,0,0);
$pdf->SetTitle("PDF Notas Ingles");
while($row = $resultado->fetch_assoc()){
  

    $pdf->setfillcolor(226, 226, 226 );
    $pdf->SetTextColor(30,30,30);
    $pdf->setdrawcolor(255,255,255);

    $pdf->Cell(20,10, $row['Cod_Nota'],1,0,'C',1);
    $pdf->Cell(34,10, $row['N_doc'],1,0,'C',1);
    $pdf->Cell(50,10, $row['Nombres'],1,0,'C',1);
    $pdf->Cell(30,10, $row['PROGRAMA_Ficha_carac'],1,0,'C',1);
    $pdf->Cell(60,10, $row['Nom_Res'],1,0,'C',1);
    $pdf->Cell(30,10, $row['NombresI'],1,0,'C',1);
    $pdf->Cell(18,10, $row['Nota'],1,0,'C',1);
     
    $pdf->Ln();

}


$pdf->Output();
?>

