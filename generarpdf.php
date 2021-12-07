<?php 
require('./recursos/fpdf/fpdf.php');
include("./recursos/phpqrcode/qrlib.php");
include_once('funciones.php');

$productos = array();
$productos = obtenerProductosEnCarrito();

$logo = 'img/logo.png';

class PDF extends FPDF {
	function titulos() {
		// Fuente
		$this->SetFont('Arial','B',12);
		$this->SetX(55);
		$this->MultiCell(180,5,utf8_decode("
        Ingeniería del Software II \n
        Lista Del Carrito de Compras \n
        Compra Realizada con Éxito
        "),0,'C');
	}

	function tabla($productos) {
		$this->SetY(60);
		$this->MultiCell(0,5,utf8_decode("LISTA DE PRODUCTOS COMPRADOS"),0,'');

		// Fuente
		$this->SetFont('Arial','B',10);
		$this->SetY(70);

		$this->Cell(10,7,utf8_decode("Nº"),1);
		$this->Cell(40,7,utf8_decode("NOMBRE"),1);
		$this->Cell(40,7,utf8_decode("PRECIO"),1);
		$this->Ln();

		$this->SetFont('Arial','',10);
		$contador = 0;
		foreach($productos as $producto) {
			$contador++;

			$this->Cell(10,7,$contador,1);
			$this->Cell(40,7,utf8_decode($producto->nombre),1);
			$this->Cell(40,7,utf8_decode($producto->precio),1);
			$this->Ln();
		}
	}

    function integrantes() {
		// Fuente
		$this->SetFont('Arial','B',12);
		$this->SetX(150);
		$this->MultiCell(180,5,utf8_decode("
        Integrantes del grupo: \n\n
        Christopher Rigores C.I.: 27.071.049 \n
        Leonel Varcácel C.I.: 27.071.049 \n
        Emiler García C.I.: 29.718.681 \n
        Carlos Rivas C.I.: 27.071.049 \n
        "),0,'C');
	}
}





$pdf = new PDF('L', 'mm', 'A4');

// Abrir fichero de texto
$pdf->AddPage();

// TOP, LEFT, WIDTH, HEIGHT
$pdf->Image($logo, 10, 10, 80, 40);
$pdf->titulos("Artículos Comprados");
$pdf->tabla($productos);
$pdf->integrantes();


$pdf->Output(); // SE VISUALIZA EN EL NAVEGADOR

?>