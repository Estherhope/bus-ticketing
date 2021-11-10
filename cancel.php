<?php
include('connection.php');
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>cancel booking</title>
</head>
<body>
<?php

if (isset($_SESSION['user_id']))
	 {
     $id=$_SESSION['user_id'];
     $sql="UPDATE bookone SET nopass='0' WHERE id='$id'";
     $res=mysqli_query($conn,$sql);
     if (!$res) 
     {
     	
     	die("mysqli failed".mysqli_error($conn));
     }
     else
     {

     	  echo "<script>
                      alert('booking cancelled.click ok to go back');
                      window.location.href='index.html';
                      </script>";
     }
 }



?>
</body>
</html>>