

<?php

require "../fpdf/fpdf.php";
header ('Content-type: text/html; charset=utf-8');

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
    $this->SetFont('Times','B',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    
    $this->Cell(270,50,'LISTA DE LAS FICHAS ',0,0,'C');
 
  
    $this->Ln(50);


    $this->Cell(26,10, 'Ficha',0,0,'C',0);
    $this->Cell(50,10, 'Programa',0,0,'C',0);
    $this->Cell(50,10, 'Area',0,0,'C',0);
    $this->Cell(34,10, 'Fecha_Ingr',0,0,'C',0);
    $this->Cell(43,10, 'Tipo',0,0,'C',0);
    $this->Cell(36,10, 'Modalidad',0,1,'C',0);
}
    
// Pie de página
function Footer()
{
    $this->SetTextColor(149, 149, 149 );
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',10);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
    $this->Write(0,'CONTACTO                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     DESARROLLADORES');
     $this->Ln(4);
    $this->Write(2,'Email: lkcalderon46@misena.edu.co // catiria4@misena.edu.co                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           Camilo Tiria & Leidy Calderon');
     $this->Ln(0);
    $this->Write(5,'Telefonos: 320 447 3192 // 313 710 3188');
     $this->Ln(3);


  }
function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);
 
        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;
 
        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }
 
        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
 
        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }
 
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }
 
    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }
}
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
 header("location:/Leidy_Calderon_Guia_2/ABGS/?x=2");


require "../Modelo/conexionBasesDatos.php";
header ('Content-type: text/html; charset=utf-8');
$sql="SELECT * FROM programa";

$objConexion=Conectarse();

$resultado = $objConexion->query($sql);


$pdf = new PDF();
$pdf=new PDF('L','mm',array(200,410));
$pdf->AliasNbPages();
//$pdf->RotatedImage('../Imagenes/Logo2.png',85,60,40,16,45);
$pdf->AddPage();
$pdf->SetFont('Times','BI',16);
$pdf->setdrawcolor(142, 58, 254 );
$pdf->setLineWidth(0.5);
$pdf->Line(10,68.9,402,68.9);
$pdf->SetTextColor(0,0,0);
$pdf->SetTitle("PDF Lista Fichas");
while($row = $resultado->fetch_assoc()){
  

    $pdf->setfillcolor(226, 226, 226 );
    $pdf->SetTextColor(30,30,30);
    $pdf->setdrawcolor(255,255,255);

 $pdf->Cell(25,10, $row['Ficha_carac'],1,0,'C',1);
    $pdf->Cell(52,10, $row['Nom_Program'],1,0,'C',1);
    $pdf->Cell(47,10, $row['Area'],1,0,'C',1);
    $pdf->Cell(38,10, $row['Fecha_Ingr'],1,0,'C',1);
    $pdf->Cell(40,10, $row['Tipo_Formacion'],1,0,'C',1);
    $pdf->Cell(40,10, $row['Modalidad'],1,0,'C',1);

    
     
    $pdf->Ln();

}


$pdf->Output();
?>
