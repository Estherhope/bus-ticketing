<?php
include('connection.php');
include("headerr.php");

?>

<link href="css/bootstrap.min.css" rel="stylesheet">

<?php
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql=("SELECT * FROM admin WHERE username='$username' AND password='$password'");

 $res=mysqli_query($conn,$sql);

 if ($res) {
 	
 	if(mysqli_num_rows($res)>0){

 		$rows = mysqli_fetch_assoc($res);
 		foreach($rows as $record)
 		{
 			if ($record['user']==1) {
 			 // $_SESSION['admin']=$username;
			header("LOCATION:admin.php");
 			}else{
 				header("location:index.html");
 			}
 		}
	
	}else{
	echo'<script>alert("Invalid Username")</script>';
	}
 }else{
 	die("query failed");
 }

}
?>
<!-- <d class="container"> 
<div class="row" style="text-align:center;background-color:#a0aaf2;font-size:2.0em">
<p>kenya train</p>
</div> -->
<div class="row" style="text-align:center;background-color:#a0aaf2;font-size:1.5em">
<!-- <p>ADMIN LOGIN</p> -->
</div> -->
<div class="row" style="background-color:lavender">
<br>
<br>
<div class="col-md-4">
</div>
<div class="col-md-4">
<div class="panel panel-default"style="background-color: #efda78">
<div class="panel-body">
<div class="panel-heading" style="text-align:center;font-size:2.2em">
  Admin Login
</div>
<form  role="form" method="POST">
<div class="form-group" style="padding-bottom:5%;font-size:1.4em">
User Name: <input type="text" class="form-control" name="username" placeholder="UserName" maxlength="50" min="3"class="" required>
Password: <input type="password" class="form-control" name="password" placeholder="Password" maxlength="10" min="5"class=""required><br>
<a href="forgotadminps.php"><span class="glyphicon glyphicon-information"></span>forgot password?</a>
<button role="submit" class="btn btn-success pull-right" name="submit">Login</button><br><br>
</div>
</form>
<div class="panel-footer"style="color:#ff0000;font-size:0.8em;"></div>
</div>
</div>
</div>
<div class="col-md-4">
</div>
</div>


	<!-- /#wrapper -->

    <!-- jQuery -->
    <<!-- script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<div class="footer" style="text-align:center">
&copy 2018.Sharon Atieno PROJECT All rights reserved. -->
</div>
	</div>

</body>
</html>