<?php
include("header.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>view comment</title>
</head>
<body>                                           
	<form name=book action="" method="">
   <div id= "book2">
          <?php
          $user_id='';

      $sql="SELECT* FROM comment ORDER BY  id DESC LIMIT 1";
      $res=mysqli_query($conn,$sql);
      if ($res) 
      {
      	while ( $row=mysqli_fetch_array($res)) 
       {
      	$user_id=$row['id'];
      }
      }
      $sql="SELECT* FROM comment WHERE id=$user_id";
      $res=mysqli_query ($conn,$sql);
      if ($res) 

      {
      echo "<table>";

      
      while ($row=mysqli_fetch_array($res))
       {
     echo"<tr><td>".$row['id'] . "<tr><td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['subject']."</td><td>".$row['comment']."</td></tr>";
      }
      echo "</table>";
      }
         ?>
		</div>
	</form>
</body>
</html>