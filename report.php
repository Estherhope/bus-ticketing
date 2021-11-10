<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

  <form name=book action="" method="">
   <div id= "book2" class="bik">
<?php
		 $nopass_sum ='';
         $cost_sum ='';
  $sql="SELECT SUM(nopass) as nopass_sum,SUM(cost) as cost_sum FROM bookone";
 $res=mysqli_query($conn,$sql);
 if (!$res) 
 {
 echo ("mysql failed".mysqli_error($conn));	
 }else{
 // 	while ($row=mysqli_fetch_assoc($res)) {
 // 	$nopass_sum=$row['nopass_sum'];
 // 	$cost_sum=$row['cost_sum'];
 // }
echo '<table class="total-sum">';
while ($row=mysqli_fetch_assoc($res))
{
	echo "8 hours remaining for full report<br> total revenue made so far is";
echo'<tr><td><hr>'.$row['nopass_sum'].'</td><td><hr>'.$row['cost_sum'].'</td></tr><hr>';
}
echo '</table>';
 }
		?>
	</div>
		 </form>
</body>
</html>