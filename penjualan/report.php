<?php
session_start();
require "library/fpdf184/fpdf.php";
require "functions_penjualan.php";

$pdf = new FPDF("P", "mm", "A4");
$pdf->AddPage();

$pdf->SetFont("Times", "B", 10);
$pdf->Cell(200, 10, "Data Barang", 0, 1, "C");

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(30, 7, 'Kode Barang', 1, 0, 'C');
$pdf->Cell(30, 7, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(30, 7, 'Satuan', 1, 0, 'C');
$pdf->Cell(30, 7, 'Merk', 1, 0, 'C');
$pdf->Cell(30, 7, 'Harga', 1, 0, 'C');

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$barang = query('SELECT * FROM barang');
foreach($barang as $row){
   $pdf->Cell(10,6, $no++,1,0,'C');
   $pdf->Cell(30,6, $row['kode_barang'],1,0);
   $pdf->Cell(30,6, $row['nama_barang'],1,0);  
   $pdf->Cell(30,6, $row['satuan'],1,0);
   $pdf->Cell(30,6, $row['merk'],1,0);
   $pdf->Cell(30,6, $row['harga'],1,1);
}
// $pdf->Output();
$pdf->Output("F","report/laporan.pdf");
?>