<?php

require "../fpdf/fpdf.php";

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../Imagenes/Logo2.png',118,10,60);
    // Arial bold 15
    $this->SetFont('Arial','B',17);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    

    $this->Cell(165,80,'REGISTRO DE ASISTENCIA AREA INGLES ',0,1,'C');
    // Salto de línea
    $this->Ln(-20);

    $this->Cell(20,10, 'Cod',1,0,'C',0);
    $this->Cell(34,10, 'N_doc',1,0,'C',0);
    $this->Cell(50,10, 'Nombres',1,0,'C',0);
    $this->Cell(38,10, 'Fecha',1,0,'C',0);
    $this->Cell(50,10, 'Observacion',1,0,'C',0);
    $this->Cell(20,10, 'Area',1,0,'C',0);
    $this->Cell(30,10, 'Ficha',1,1,'C',0);

}

// Pie de página
function Footer()
{
   
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');

}
}

require "../Modelo/conexionBasesDatos.php";

$objConexion=Conectarse();
$sql ="SELECT  i. Cod_Inas, i. N_doc, i. Fecha_Inas, i. Observaciones,i. Area, a. N_doc, a. Nombres, a. PROGRAMA_Ficha_carac  FROM inasistencia as i inner join  aprendiz as a on i. N_doc= a. N_doc where Area = 'Ingles' ";

$resultado = $objConexion->query($sql);

$pdf = new PDF();
$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(20,10, $row['Cod_Inas'],1,0,'C',0);
    $pdf->Cell(34,10, $row['N_doc'],1,0,'C',0);
    $pdf->Cell(50,10, $row['Nombres'],1,0,'C',0);
    $pdf->Cell(38,10, $row['Fecha_Inas'],1,0,'C',0);

        $pdf->Cell(50,10, $row['Observaciones'],1,0,'C',0);
        $pdf->Cell(20,10, $row['Area'],1,0,'C',0);
        $pdf->Cell(30,10, $row['PROGRAMA_Ficha_carac'],1,1,'C',0);

}


$pdf->Output();
?>