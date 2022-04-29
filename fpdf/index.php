<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');

$hostName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "eldb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

class PDF extends FPDF
{
// Page header
function Header()
                {
                    // Logo
                    // $this->Image('logo.png',10,6,30);
                    // Arial bold 15
                    $this->SetFont('Arial','B',15);
                    // Move to the right
                    // $this->Cell(80);
                    // Title
                    $this->Cell(30,10,'Division of Biomedical Engineering Services');
                    // Line break
                    $this->Ln(8);
                    $this->Cell(50,10,'Ministry of Health');
                    $this->Ln(8);
                }

// Page footer
function Footer()
                {
                    // Position at 1.5 cm from bottom
                    $this->SetY(-15);
                    // Arial italic 8
                    $this->SetFont('Arial','I',8);
                    // Page number
                    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
                }
}

$select = "SELECT * FROM `institutes` ORDER BY Job_id DESC LIMIT 0,1";
$result = $conn->query($select);
// Instanciation of inherited class
                $pdf = new PDF();
                $pdf->AliasNbPages();
                $pdf->AddPage();


                    $pdf->SetFont('Arial','B',14);
                    while($row = $result->fetch_object()){
                    $job_id = $row->job_id;
                    $institute_name = $row->institute_name;
                    // $address = $row->address;
                    // $phone = $row->phone;
                    $pdf->cell(40, 10, 'Institute :');
                    $pdf->Cell(40,10,$institute_name);
                    $pdf->cell(40, 10, 'Job No :');
                    $pdf->Cell(20,10,$job_id,);
                   
                    // $pdf->Cell(80,10,$address,1);
                    // $pdf->Cell(40,10,$phone,1);

                    
                    $pdf->Ln();

}

                $pdf->Output();
?>



