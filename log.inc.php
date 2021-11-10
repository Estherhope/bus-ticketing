<?php
session_start();
if(isset($_POST['submit']))
{

	include('connection.php');
	// session_start();
	$user=mysqli_real_escape_string ($conn,$_POST['user']);
   $pass=mysqli_real_escape_string ($conn,$_POST['pass']);
   //ERROR HANDLERS
   //CHECK IF INPUTS ARE EMPTY


$sql="SELECT *FROM admin WHERE username='$user' AND password='$pass'";

$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
$row= mysqli_fetch_assoc($result);

if($resultCheck>0)
{

  echo"login success !!! welcome".$row['username'];
  {
    $_SESSION['user']=$row['username'];

      header("location:adindex.html");
  }


 }
   	else{
          echo'<script>alert("ERROR!!!....invalid")</script>';
          
         }

      
 	
}
else{
header("location:../log.php?login=error");
die("query failed");

exit();
}