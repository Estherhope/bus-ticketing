<?php
include("header.php");
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
	<title>view cabin</title>
</head>

<body>
	
  <form name=book action="" method="">
   <div id= "book2">
		<?php
		$sql="SELECT*FROM cabin";
		$res=mysqli_query($conn,$sql);
		if ($res) {
			echo "<table border=1>";
			echo "<tr><th>ID</th> <th>First Name</th><th>Last name</th><th>Gender</th><th>ID_No</th><th>Phone</th><th>Recepient Name</th><th>Last Name</th><th>Gender</th><th>Email</th><th>Date</th><th>Email</th><th>Pass</th><th>Terminal</th> <th>Cabin</th><th>Purpose</th><th>Cost</th><th>Pay Mode</th><th>Verify</th></tr>";
			while ($row=mysqli_fetch_array($res)) {
				echo "<tr><td><hr>".$row['id']. "<td><td><hr>".$row['name']."</td><td><hr>".$row['lname']."</td><td><hr>".$row['gender']."</td><td><hr>".$row['id_no']."</td><td><hr>".$row['phoneno']."</td><td><hr>".$row['name']."</td><td><hr>".$row['lname']."</td><td><hr>".$row['gender']."</td><td><hr>".$row['mail']."</td><td><hr>".$row['date']."</td><td><hr>".$row['pass']."</td><td><hr>".$row['Terminal']."</td><td><hr>".$row['cabin']."</td><td><hr>".$row['purpose']."</td><td><hr>".$row['cost']."</td><td><hr>".$row['mode_payment']."</td><td><hr>".$row['verify']."</td><td>"."</td></tr>";


			}
			 echo "</table>";
		}
		?>
	</div>
	</form>

</body>
</html>>