
<?php
include("connection.php");
session_start();
?>
<html>
<title>book</title>
<link rel="stylesheet" type="text/css" href="booktwo.css">
<head>
	<title>train</title>
	
</head>
<div id="header">
<img src="traina.jpg" alt="">
	
</div>
<div id="navbar">

<ul>
<li><a href= "admin.php"> BACK</a></li>
<li><a href"" class="active"> RESERVATION</a>
                          <ul>
                          <li><a href= "reservation.php" class="active">RESERVED</a></li>
                          <li><a href="accept.php">ACCEPT RESERVATION</a></li>
                          <li><a href="decline.php">DECLINERESERVATION</a></li>

                          </ul>
</li>
<li><a href= class"active"> CUBIN</a>
	<ul>
                          <li><a href= "cubinreservation.php" class="active">RESERVED CUBIN</a></li>
                          <li><a href="accept.php">ACCEPT RESERVATION</a></li>
                          <li><a href="decline.php">DECLINE RESERVATION</a></li>

                          </ul>
                   
<li><a href="comment.php"> comment</a></li>
<li><a href="adminindex.php" class="glyphicon glyphicon-off">  logout</a></li>
</ul>
</div>
<form name=book action="" method="">
   <div id= "book2">

	<?php
$sql="SELECT * FROM bookone  ";
$res=mysqli_query($conn,$sql);
if ($res) {
	
echo "<table border=1>";
echo "<tr><th>ID</th> <th>Terminal</th><th>Date</th><th>Time</th><th>Seats</th><th>Price</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>ID number</th><th>Phone</th><th>Email</th><th>Pay Mode</th></tr>";
while($row=mysqli_fetch_array($res)) {
echo"<tr><td><hr>".$row['id']. "</td><td><hr>".$row['terminal']."</td><td><hr>".$row['date']."</td><td><hr>".$row['time']."</td><td><hr>".$row['nopass']."</td><td><hr>".$row['cost']."</td><td><hr>".$row['name']."</td><td><hr>".$row['lname']."</td><td><hr>".$row['gender']."</td><td><hr>".$row['id_number']."</td><td><hr>".$row['phone']."</td><td><hr>".$row['mail']."</td><td><hr>".$row['mode_payment']."</td><td><hr>"."</td></tr>";

}
echo "</table>";

}
mysqli_free_result($res);

?>

</div>
</form>

<!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<div class="footer" style="text-align:center">
&copy 2018. Copyright of Sharon Atieno. All rights reserved.
</div>
	</div>
  

</body>
</html>