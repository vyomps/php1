<?php

require dirname(__FILE__) . '/../../lib/FPDF.php';
require dirname(__FILE__) . '/../../lib/FPDF/Code39.php';

$pdf = new FPDF_Code39();
$pdf->AddPage();
$pdf->Code39(20, 20, 'EX4MPL3');
$pdf->Output(dirname(__FILE__) . '/code39_barcode.pdf');
