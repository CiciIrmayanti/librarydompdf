<?php
require 'vendor/autoload.php';
//reference the Dompdf namespace
use Dompdf\Dompdf;
//instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('Menggunakan Library DOMpdf untuk Membuat Report PDF dengan DOMPDF');
//(Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
//render the HTML as pdf
$dompdf->render();
//output the generated PDF to browser
$dompdf->stream('hasil_report.pdf');