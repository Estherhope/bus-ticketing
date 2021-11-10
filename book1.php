<?php
include("connection.php");
?>
<html>
<head>
	<title> book1</title>
</head>
<body>
	<?php
	if (isset($_POST['submit']))

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $account=$_POST['account'];
    $accountype = $_POST['accountype'];
    $email = $_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
     $passwordrepeat=$_POST['passw'];
	 {
		$terminal = $_POST['fro'];
		$date = $_POST['date'];
		$time=$_POST['derpature'];

		if($time == '8:00am' && $terminal=='Nyahururu-Mombasa ')
		{
			$bus = 'bus one';
			$_SESSION['bus'] = $bus;
		}
	 	else if($time == '9:00pm' && $terminal=='Mombasa-Nyahururu ')
		{
			$bus = 'bus one';
			$_SESSION['bus'] = $bus;
		}
		else{

				$bus = 'bus two';
			$_SESSION['bus'] = $bus;
		}



		$sql="INSERT INTO bookone (terminal,date,time,bus)
		VALUES ('$terminal','$date','$time','$bus')";
		$res=mysqli_query($conn,$sql);

		 $_SESSION['user_id']=mysqli_insert_id($conn);
		 
		if (!$res)
		 {
			die("query failed".mysqli_error($conn));
		}
		else
		{
			header("Location:book2.html");
		}
	}
	?>
	</body>
	</html>
