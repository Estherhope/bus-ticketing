<?php  
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> cabin cancelling</title>
</head>
<body>

	<?php
	if (isset($_SESSION['user_id']))
	 {
     $id=$_SESSION['user_id'];
     $sql="UPDATE cabin SET pass='0' WHERE id='$id'";
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
     // else
     // {
     //      echo "<script>
     //                  alert('invalid transaction id.click ok to go back');
     //                  window.location.href='pay.html';
     //                  </script>";
     //          }

     ?>

          


</body>
</html>>