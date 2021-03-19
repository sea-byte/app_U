<?php
require('/Applications/MAMP/htdocs/www/full/fpdf/fpdf.php');
require_once('conexion.php');

$resul = mysqli_query($conexion,"SELECT * FROM tabla1");

class PDF extends FPDF
{
   //Cabecera de página
   function Header()
   {

    $this->Image('/Applications/MAMP/htdocs/app/img/logo.PNG',10,8,33);

      $this->SetFont('Arial','B',12);

      //$this->Cell(30,20,'Listado de Productos BD',1,0,'C');

   }
   //Pie de página
function Footer()
{

$this->SetY(-15);

$this->SetFont('Arial','I',8);

$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   
}
}

$pdf=new PDF('L','mm','Letter');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(250,10,'Listado de Productos BD',0,0,'C');
$pdf->Ln(20);
$pdf->Cell(62,15,'Nombre',1,0,'C',0);
$pdf->Cell(62,15,'Marca',1,0,'C',0);
$pdf->Cell(62,15,'Precio de Compra',1,0,'C',0);
$pdf->Cell(62,15,'Cantidad de Compra',1,0,'C',0);
$pdf->Ln(15);

while($fila = mysqli_fetch_array($resul))
{
    $nombre = $fila['nombre'];
    $marca = $fila['marca'];
    $precio = $fila['precio_compra'];
    $cantidad = $fila['cantidad_compra'];
    
   
    
    $pdf->Cell(62,15,$nombre,1,0,'C',0);
    $pdf->Cell(62,15,$marca,1,0,'C',0);
    $pdf->Cell(62,15,$precio,1,0,'C',0);
    $pdf->Cell(62,15,$cantidad,1,0,'C',0);
    /*$pdf->Cell(30,15,$precio,1,0,'R',1);
    $pdf->Cell(30,15,$cantidad,1,0,'R',1); */
    $pdf->Ln(15);

}
$pdf->Output('Productos_BD.pdf','I'); 
?>

