<?php
     include('header.php');
     include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>cancelled book</title>
</head>
<body>
	<?php
       // if (isset($_session['submit'])) {
      // $id=$_session['user_id'];
      $sql="SELECT * FROM cabin WHERE pass=0";
      $res=mysqli_query($conn,$sql);
      if (!$res) 
      {

      	echo ("mysqli failed".mysqli_error($conn));
      }
      // echo "<table>";
      
      // while($row=mysqli_fetch_array($res));
      // {
      //  echo '<tr><td>'.$row['pass'].'<tr><td>';

      // }
      //  echo "</table>";}
      //  // }

	?>

</body>
</html>>