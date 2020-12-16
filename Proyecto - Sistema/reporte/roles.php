
<?php
define('USUARIO','root'); 
define('CONTRA',''); 
define('SERVIDOR','localhost'); 
define('BASEDATOS','db_planilla');  

?>

<?php
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
    $this->Image('imagenes/pro2.png',8,8,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->Cell(100,10,'Reporte de Roles',1,0,'C');

    // ---------------
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
    $this->Cell(5,10,'Sistema planilla de pagos',0,0,'L');
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
 
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(153,6,10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',9);

//$pdf->Ln(8);
$pdf->Cell(90,6,'Codigo',1,0,'C',1);
$pdf->Cell(100,6,'Cargo',1,0,'C',1);

$pdf->SetFont('Arial','',8);

$con = new mysqli(SERVIDOR,USUARIO,CONTRA,BASEDATOS);
$sql ="select * from cargo";
$consulta=$con->query($sql);
$con->close();

$pdf->SetFillColor(232,232,232);
$pdf->SetTextColor(0,0,0);
$fill = false;

while($resultado = mysqli_fetch_array($consulta)){
	$pdf->Ln(6);
    $pdf->Cell(90,6,$resultado['id'],1,0,'C',$fill);
	$pdf->Cell(100,6,$resultado['descripcion'],1,0,'C',$fill);


    $fill = !$fill;
}
$pdf->Output('Reporte de roles '.$fecha.'.pdf','I');

?>