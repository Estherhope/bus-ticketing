<?php
require('fpdf17/fpdf.php');
include("connection.php");
session_start();
class PDF extends FPDF{
	
function header (){

	// Logo
    $this->Image('icon/bus.jpeg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(100);
    // Title
    $this->Cell(70,10,'navin ONLINE BOOKING SYSTEM
    	',0,0,'');
     
    // Line break
  // Line break
    $this->Ln(10);

        $this->Cell(200);
    // Title
    $this->Cell(70,10,'navin online booking system
    	',0,1,'');
      $this->Cell(200);
      $this->Cell(70,10,'Po.Box 785-00100  
    	',0,1,'');
       $this->Cell(200);
         $this->Cell(70,10,'NAIROBI 
    	',0,0,'');
     
    // Line break
    $this->Ln(20);
	
	$this->setFont('Arial','B','10');
	$this->Ln(5);
	$this->setFillcolor(180,180,255);
	$this->setDrawcolor(50,50,100);
//cell(width,height,text,border,end line,[align]))

	// $this->cell(30,7,'First Name',1,0,'',true);

	// $this->cell(30,7,'Id Number',1,0,'',true);
    
	// $this->cell(30,7,'terminal',1,0,'',true);
    
	// $this->cell(27,7,'seat(s)',1,0,'',true);
    
	// $this->cell(40,7,'Booking code',1,0,'',true);

	// $this->cell(30,7,'Date',1,0,'',true);

	// $this->cell(30,7,'Train',1,0,'',true);

	// $this->cell(30,7,'Paid',1,0,'',true);

	// $this->cell(45,7,'Payment Method',1,1,'',true);





 //   $this->Ln(2);
	// $this->cell(30,7,'First Name',0,1,'',true);
 
	// $this->cell(30,7,'Id Number',0,1,'',true);
    
	// $this->cell(30,7,'terminal',0,1,'',true);
    
	// $this->cell(27,7,'seat(s)',0,1,'',true);
    
	// $this->cell(40,7,'Booking code',0,1,'',true);

	// $this->cell(30,7,'Date',0,1,'',true);

	// $this->cell(30,7,'Train',0,1,'',true);

	// $this->cell(30,7,'Paid',0,1,'',true);

	// $this->cell(30,7,'Payment Method',0,1,'',true);


	 
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

$sql="SELECT * FROM bookone ORDER BY id DESC LIMIT 1";

$res=mysqli_query($conn,$sql);
if ($res) {
	while($data=mysqli_fetch_array($res))

	{
		$user_id = $data['id'];
	
	
}	
}
$sql="SELECT * FROM bookone WHERE id = $user_id";
$res=mysqli_query($conn,$sql);
if ($res) 
    {
	while($data=mysqli_fetch_array($res))
	{
     $pdf-> cell(30,7,'Full Names',0,0);
      $pdf->Cell(50);
      $pdf->cell(30,8,$data ['name'],0,0);
       $pdf->Cell(5);
      $pdf->cell(50,8,$data ['lname'],0,1);
     $pdf-> cell(30,7,'Id Number',0,0);
      $pdf->Cell(50);
	$pdf->cell(50,8,$data['id_number'],0,1);
     $pdf-> cell(30,7,'Terminal',0,0);
     $pdf->Cell(50);
	$pdf->cell(50,8,$data['terminal'],0,1);
    $pdf-> cell(30,7,'Date',0,0);
    	 $pdf->Cell(50);
	$pdf->cell(27,8,$data['date'],0,1);

     $pdf-> cell(30,7,'Time',0,0);
	 $pdf->Cell(50);
	 $pdf->cell(40,8,$data['time'],0,1);

	 $pdf-> cell(30,7,'Booking code',0,0);
	 $pdf->Cell(50);
	$pdf->cell(30,8,$data['code'],0,1);
	 $pdf-> cell(30,7,'Class Type',0,0);
	 $pdf->Cell(50);
	$pdf->cell(30,8,$data['classtype'],0,1);

	 $pdf-> cell(30,7,'Passenger(s)',0,0);
	 $pdf->Cell(50);
	$pdf->cell(30,8,$data['nopass'],0,1);
	$pdf-> cell(30,7,'Seat(s)',0,0);
    $pdf->Cell(50);
    $pdf->cell(45,8,$data['nopass'],0,1);

	$pdf-> cell(30,7,'Train',0,0);
	 $pdf->Cell(50);
	$pdf->cell(30,8,$data['bus'],0,1);
	$pdf-> cell(30,7,'Paid Amount',0,0);
	 $pdf->Cell(50);
	$pdf->cell(45,8,$data['cost'],0,1);
	$pdf-> cell(30,7,'Payment method',0,0);
	$pdf->Cell(50);
	$pdf->cell(50,8,$data['mode_payment'],0,1);

	}
}
$pdf->output();
{
}
?>
