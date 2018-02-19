
<?


require_once('../classes/fpdf');





function display_detail($userid,$password){

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'New User Details');
$pdf->Cell(40,10,'UserID :'.$userid);
$pdf->Cell(40,10,'Password :'.$password);
$pdf->Cell(40,10,'Password can be changed at the settings tab');

$pdf->Output();
}
