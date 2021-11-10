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
    $this->Cell(100);
    // Title
    $this->Cell(70,10,'TRANS AFRIKA TRAIN
    	',0,0,'');
     
    // Line break
  // Line break
    $this->Ln(10);

        $this->Cell(200);
    // Title
    $this->Cell(70,10,'Trans Africa Train 
    	',0,1,'');
      $this->Cell(200);
      $this->Cell(70,10,'Po.Box 785-257  
    	',0,1,'');
       $this->Cell(200);
         $this->Cell(70,10,'Wadiya 
    	',0,0,'');
     
    // Line break
    $this->Ln(20);
	
	$this->setFont('Arial','B','10');
	$this->Ln(5);
	$this->setFillcolor(180,180,255);
	$this->setDrawcolor(50,50,100);


     $this->cell(30,7,'terminal',1,0,'',true);
     $this->cell(30,7,'name',1,0,'',true);
     $this->cell(30,7,'cost',1,0,'',true);
      $this->cell(30,7,'total',1,0,'',true);






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
$sql="SELECT * FROM bookone ORDER BY id DESC LIMIT 20";
$res=mysqli_query($conn,$sql);
if ($res)
 {
	while($data=mysqli_fetch_assoc($res))
	{
		$user_id = $data['id'];
}	
}
$sql="SELECT*FROM bookone ";
$res=mysqli_query($conn,$sql);
if (!$res){

  echo ("mysqli failed".mysqli_error($conn));
}
else
 {
	while($data=mysqli_fetch_array($res))

	{
   $pdf->setFont ('Arial','',25);

     $pdf->Cell(50);
  $pdf->cell(30,8,$data['terminal'],0,1);
      
     $pdf-> cell(30,7,['name'],1,0);
      $pdf->Cell(50);
  
     $pdf-> cell(30,7,['cost'],1,0);
      $pdf->Cell(50);
      $pdf-> cell(30,7,['total'],1,0);
      $pdf->Cell(50);
	}
}
$pdf->output();
{
}
?>