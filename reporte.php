<?php
require ('Nueva carpeta/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',8);
    // Movernos a la derecha
   
    
$this->Cell(80,0, 'Republica Bolivariana de Venezuela '.$this->Ln(1).'Estado Bolivariano de Guarico '.$this->Ln().'Alcaldia del Municipio Ortiz',0,0,'c');



    // Título
    $this->Cell(30,10,'Reportes',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    	$this->cell(10, 10, 'Nombre', 1, 0, 'C', 0);
		$this->cell(10, 10, 'Apellido', 1, 0, 'C', 0);
		$this->cell(10, 10, 'Cedula', 1, 0, 'C', 0);
		$this->cell(10, 10, 'N.cuenta', 1, 0, 'C', 0);
		$this->cell(10, 10, 'Cargo', 1, 0, 'C', 0);
		$this->cell(10, 10, 'Salario', 1, 1, 'C', 0);$this->cell(33, 10, 'H.Extras', 1, 0, 'C', 0);
        $this->cell(33, 10, 'Nobturnidad', 1, 0, 'C', 0);
        $this->cell(33, 10, 'D.feriado', 1, 0, 'C', 0);
        $this->cell(33, 10, 'B.especia', 1, 0, 'C', 0);
        $this->cell(33, 10, 'Salario Neto', 1, 0, 'C', 0);



}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina ',0,0,'C');
}
}

require 'consult.php';
$consulta = "SELECT * FROM RRHH.registro";
$resultado = mysql_query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);


	while($row=mysql_fetch_assoc($resultado)){
		$pdf->cell(33, 10, $row['nombre'], 1, 0, 'C', 0);
		$pdf->cell(33, 10, $row['apelli'], 1, 0, 'C', 0);
		$pdf->cell(33, 10, $row['ced'], 1, 0, 'C', 0);
		$pdf->cell(33, 10, $row['numcuent'], 1, 0, 'C', 0);
		$pdf->cell(33, 10, $row['carg'], 1, 0, 'C', 0);
		$pdf->cell(33, 10, $row['salario'], 1, 1, 'C', 0);
        $pdf->cell(33, 10, $row['he'], 1, 1, 'C', 0);
        $pdf->cell(33, 10, $row['nod'], 1, 1, 'C', 0);
        $pdf->cell(33, 10, $row['diaf'], 1, 1, 'C', 0);
        $pdf->cell(33, 10, $row['be'], 1, 1, 'C', 0);
        $pdf->cell(33, 10, $row['dad'], 1, 1, 'C', 0);
	}
$pdf->Output();
?>