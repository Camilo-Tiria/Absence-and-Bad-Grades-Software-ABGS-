<?php

require "../fpdf/fpdf.php";

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

    // Arial bold 15
    $this->SetFont('Arial','B',17);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'LISTA FICHAS ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(20,10, 'Ficha_carac',1,0,'C',0);
	$this->Cell(34,10, 'Nom_Program',1,0,'C',0);
	$this->Cell(50,10, 'Area',1,0,'C',0);
	$this->Cell(38,10, 'Fecha_Ingr',1,0,'C',0);
    $this->Cell(30,10, 'Tipo',1,0,'C',0);
    $this->Cell(20,10, 'Modalidad',1,1,'C',0);
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
$sql ="select * from programa ";

$resultado = $objConexion->query($sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row = $resultado->fetch_assoc()){
	$pdf->Cell(20,10, $row['Ficha_carac'],1,0,'C',0);
	$pdf->Cell(34,10, $row['Nom_Program'],1,0,'C',0);
	$pdf->Cell(50,10, $row['Area'],1,0,'C',0);
	$pdf->Cell(38,10, $row['Fecha_Ingr'],1,0,'C',0);

		$pdf->Cell(30,10, $row['Tipo_Formacion'],1,0,'C',0);
		$pdf->Cell(20,10, $row['Modalidad'],1,1,'C',0);

}


$pdf->Output();
?>

