
<?php
require('../config/classes/fpdf.php');
session_start();
$newuser = $_SESSION['newuser'];
$pass = $_SESSION['pass'];


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'New User Details');
$pdf->Ln();
$pdf->Cell(40,10,'UserID :'.$newuser);
$pdf->Ln();
$pdf->Cell(40,10,'Password :'.$pass);
$pdf->Ln();
$pdf->Cell(40,10,'Password can be changed by clicking on the settings tab');
$pdf->Output('D',$newuser.'.pdf');


?>