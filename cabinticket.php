
<?php

require('fpdf17/fpdf.php');
include("connection.php");
session_start();

class PDF extends FPDF{
	
function header (){

	// Logo
    $this->Image('traina.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(120);
    // Title
    $this->Cell(70,10,'SGR ONLINE BOOKING SYSTEM'
    	,'0,0,');
     
    // Line break
  // Line break
    $this->Ln(10);

        $this->Cell(220);
    // Title
    $this->Cell(70,10,'Trans Africa Train 
    	',0,1,'');
      $this->Cell(220);
      $this->Cell(70,10,'Po.Box 785-257  
    	',0,1,'');
       $this->Cell(220);
         $this->Cell(70,10,'Wadiya 
    	',0,0,'');
     
    // Line break
    $this->Ln(20);
	
	$this->setFont('Arial','B','10');
	$this->Ln(5);
	$this->setFillcolor(180,180,255);
	$this->setDrawcolor(50,50,100);
	 
}
function foooter(){


}
}

$pdf =new PDF ('L','mm','A4');
$pdf->ALiasNBpages('{pages}');
$pdf->AddPage();
$pdf->setFont ('Arial','',20);
	$pdf->setFillcolor(180,180,255);
$pdf->setDrawcolor (180,180,100);
$user_id= '';

$sql="SELECT * FROM cabin ORDER BY id DESC LIMIT 1";

$res=mysqli_query($conn,$sql);
if ($res) {
	while($data=mysqli_fetch_array($res))

	{
		$user_id = $data['id'];
	
	
	}
}

$sql="SELECT * FROM cabin WHERE id = $user_id";
$res=mysqli_query($conn,$sql);
if ($res) {
	while($data=mysqli_fetch_array($res))

	{
   
     $pdf-> cell(30,7,'Full Name',0,0);
      $pdf->Cell(50);
      $pdf->cell(30,8,$data   ['name'],0,0);
       $pdf->Cell(15);
      $pdf->cell(30,8,$data   ['lname'],0,1);
     $pdf-> cell(30,7,'Id Number',0,0);
      $pdf->Cell(50);
	$pdf->cell(30,8,$data['id_no'],0,1);
	 

     $pdf-> cell(30,7,'date',0,0);
	 $pdf->Cell(50);
	 $pdf->cell(40,8,$data['date'],0,1);


   $pdf-> cell(30,7,'Terminal',0,0);
   $pdf->Cell(50);
   $pdf->cell(30,8,$data['Terminal'],0,1);

    $pdf-> cell(30,7,'cabin',0,0);
    $pdf->Cell(50);
	$pdf->cell(30,8,$data['cabin'],0,1);

    $pdf-> cell(30,7,'Booking Code',0,0);
     $pdf->Cell(50);
	$pdf->cell(30,8,$data['verify'],0,1);
	$pdf-> cell(30,7,'cost',0,0);
     $pdf->Cell(50);
	$pdf->cell(30,8,$data['cost'],0,1);

	$pdf-> cell(30,7,'mode of payment',0,0);
     $pdf->Cell(50);
	$pdf->cell(30,8,$data['mode_payment'],0,1);



	
	
	
	}
}



$pdf->output();
{

}

?>
