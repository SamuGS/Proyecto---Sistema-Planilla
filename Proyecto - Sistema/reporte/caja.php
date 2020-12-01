
<?php
define('USUARIO','root'); 
define('CONTRA',''); 
define('SERVIDOR','localhost'); 
define('BASEDATOS','db_banquete');  

?>

<?php
include "../core/autoload.php";
include "../core/modules/index/model/SellData.php";
include('pdf/fpdf/fpdf.php');

//hora y fecha
    date_default_timezone_set('America/El_Salvador'); 
    $fecha = date('d-m-Y g:i:s A');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('imagenes/caja1.png',10,5,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->Cell(100,10,"Factura #".$_GET["id"],1,0,'C');

    $this->Image('imagenes/sg.png',170,9,30);
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$clients = SellData::getAllProductsBySellId();

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(153,6,10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Times','B',12);

$sells = SellData::getByBoxId($_GET["id"]);

$pdf->Cell(95,8,'Total',1,0,'C',1);
$pdf->Cell(95,8,'Fecha',1,0,'C',1);
$pdf->SetFont('Arial','',12);

$total_total = 0;

$pdf->SetFillColor(232,232,232);
$pdf->SetTextColor(0,0,0);
$fill = false;
$pdf->SetFont('Arial','',11);
foreach($sells as $sell){
	$total=0;
$operations = OperationData::getAllProductsBySellId($sell->id);
	foreach($operations as $operation){
		$product  = $operation->getProduct();
		$total += $operation->q*$product->price_out;
	}
	$total_total +=$total;

    $pdf->Ln(8);
	$pdf->Cell(95,8,("$ ".number_format($total,2,".",",")),1,0,'C',$fill);
	$pdf->Cell(95,8,$sell->created_at,1,0,'C',$fill);
	$fill = !$fill;

}
   $pdf->SetFillColor(153,6,10);
   $pdf->SetTextColor(255,255,255);
   $pdf->SetFont('Arial','B',11);
   $pdf->Ln(8);
   $pdf->Cell(95,8,("Total: $".number_format($total_total,2,".",",")),1,0,'C',1);

$pdf->Output('Reporte de Caja '.$fecha.'.pdf','I');



?>