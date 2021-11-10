<?php
include("connection.php");
session_start();
?>
<html>
	<title>bool2.</title>

</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		$nopass=$_POST['x'];
		$classtype=$_POST['z'];
		$cost=$_POST['a'];
	    $z = $_SESSION['user_id'];
        $sql = "UPDATE bookone SET nopass= '$nopass', classtype= '$classtype',cost= '$cost' WHERE id = $z";
		$res=mysqli_query($conn,$sql);
		if (!$res) {
		    die("query faied".mysqli_error($conn));
		}
		else
		{
			header("location:book3.html");
		}
		}
	?>
	</body>
	</html>