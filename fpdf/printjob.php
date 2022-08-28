

<?php
//$var_value = $_G['varname'];


//$print_page= $_POST['job_id'];
$print_page= "65";
require('fpdf.php');
/*A4 width : 219mm*/
$pdf = new FPDF('P','mm','A4');

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



//$select = "SELECT * FROM `institutes` ORDER BY Job_id DESC WHERE 'job_id = 65'  ";
$select = "SELECT * FROM `institutes` ORDER BY Job_id ASC LIMIT $print_page,1";
$result = $conn->query($select);
// Instanciation of inherited class
                $pdf = new PDF();
                $pdf->AliasNbPages();
                $pdf->AddPage();


                    $pdf->SetFont('Arial','i',11);
                    while($row = $result->fetch_object()){
                    $job_id = $row->job_id;
                    $institute_name = $row->institute_name;
                    $equipment_name= $row->equipment_name;
                    $equipment_make = $row->equipment_make;
                    $equipment_model = $row->equipment_model;
                    $location_id = $row->location_id;
                    $oic_id = $row->oic_id;
                    $h_type = $row->h_type;

                   
                    $pdf->cell(40, 10, 'Institute :');
                    $pdf->Cell(40,10,$institute_name);

                    $pdf->cell(40, 10, 'Job No :');
                    $pdf->Cell(71 ,10,'EL/',0,0);
                    $pdf->Cell(20,10,$job_id,);
                    $pdf->Ln();
                    $pdf->cell(40, 10, 'Equipment :');
                    $pdf->Cell(20,10,$equipment_name,);
                    $pdf->Ln();
                    $pdf->cell(40, 10, 'Make :');
                    $pdf->Cell(20,10,$equipment_make,);
                    $pdf->cell(40, 10, 'Model :');
                    $pdf->Cell(20,10,$equipment_model,);
                    $pdf->Ln();
                    $pdf->cell(40, 10, 'Location :');
                    $pdf->Cell(20,10,$location_id,);
                    $pdf->cell(40, 10, 'OIC :');
                    $pdf->Cell(20,10,$oic_id,);
                    $pdf->Ln();
                    $pdf->cell(40, 10, 'Type :');
                    $pdf->Cell(20,10,$h_type,);
                  

                    
                    $pdf->Ln();

}
$pdf->Cell(71 ,10,'1',0,0);
$pdf->Cell(59 ,5,'2',0,0);
$pdf->Cell(59 ,10,'3',0,1);

$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(32 ,6,'Date',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,0,'C');
$pdf->Cell(32 ,6,'',1,1,'C');
$pdf->Cell(32 ,6,'OIC',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,1,'C');
/*Heading Of the table end*/
$pdf->Cell(32 ,6,'1',1,0,'L');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,1,'C');
//2
$pdf->Cell(32 ,6,'2',1,0,'L');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,1,'C');
//3
$pdf->Cell(32 ,6,'3',1,0,'L');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,1,'C');
//4
$pdf->Cell(32 ,6,'4',1,0,'L');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,1,'C');
//5
$pdf->Cell(32 ,6,'5',1,0,'L');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,0,'C');
$pdf->Cell(16 ,6,'',1,1,'C');
//end of section 2
$pdf-> Ln();
$pdf -> Line(10, 145, 203, 145);
$pdf->Cell(71 ,10,'3',0,0);
$pdf->Cell(59 ,10,'Spare Parts',0,0);

$pdf-> Ln();
/*Heading Of the table*/
$pdf->Cell(27 ,6,'H500',1,0,'C');
$pdf->Cell(27 ,6,'Stock No',1,0,'C');
$pdf->Cell(13 ,6,'Qty',1,0,'C');
$pdf->Cell(47 ,6,'Discription',1,0,'C');
$pdf->Cell(12 ,6,'Sig.',1,0,'C');
$pdf->Cell(27 ,6,'H503',1,0,'C');
$pdf->Cell(27 ,6,'Stock No',1,0,'C');
$pdf->Cell(12 ,6,'Qty',1,1,'C');
//1
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(13 ,6,'',1,0,'C');
$pdf->Cell(47 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,1,'C');
//2
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(13 ,6,'',1,0,'C');
$pdf->Cell(47 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,1,'C');
//3
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(13 ,6,'',1,0,'C');
$pdf->Cell(47 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,1,'C');
//4
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(13 ,6,'',1,0,'C');
$pdf->Cell(47 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,1,'C');
//5
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(13 ,6,'',1,0,'C');
$pdf->Cell(47 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(27 ,6,'',1,0,'C');
$pdf->Cell(12 ,6,'',1,1,'C');

$pdf-> Ln();

$pdf -> Line(10, 195, 203, 195);
$pdf->Cell(71 ,10,'4 I,',0,0);
$pdf-> Ln();

$pdf->SetFont('Arial','',10);
    for ($i = 0; $i <= 10; $i++) {
		$pdf->Cell(10 ,6,$i,1,0);
		$pdf->Cell(80 ,6,'HP Laptop',1,0);
		$pdf->Cell(23 ,6,'1',1,0,'R');
		$pdf->Cell(30 ,6,'15000.00',1,0,'R');
		$pdf->Cell(20 ,6,'100.00',1,0,'R');
		$pdf->Cell(25 ,6,'15100.00',1,1,'R');
	}
		

$pdf->Cell(118 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,'151000.00',1,1,'R');


                $pdf->Output();
?>



