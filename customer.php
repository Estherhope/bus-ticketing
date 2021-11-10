<?php
include('connection.php');
session_start();
if(!isset($_SESSION['admin'])){
header("LOCATION:adminindex.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page 
via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php

?>
<div class="container-fluid">
<div class="row" style="text-align:center;background-color:green;font-size:2.0em">
<p>TRANS AFRICA TRAIN</p>
</div>
<div class="row" style="text-align:center;background-color:green;font-size:1.0em">
</div>
<div class="row" style="text-align:center;background-color:green;font-size:1.5em">
<p>ADMIN</p>
</div>
<div class="row" style="font-size:1.0em;background-color:green">
<div class="col-lg-10"></div>
<div class="col-lg-2">
<?php
if(isset($_SESSION['admin'])){
$user=$_SESSION['admin'];
$sql=("SELECT * FROM admin WHERE username='$user'");
$res=mysqli_query($conn,$sql);

$xx=mysqli_fetch_array($res);
echo 'Welcome <br>';
}
else
{
header("locaation:Adminindex.php");
}
?>
</div>
</div>
<div class="row" style="background:green;font-size:1.1em;">
<div class="col-lg-10"></div>
<div class="col-sm-2"><ul class="nav navbar-nav">
					<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
</ul></div>

</div>
<div class="row" >
<div class="navbar navbar-vertical navbar-inverse navbar-responsive">
					<div class="navbar-header">
							<a href="" class="navbar-brand" style="color:yellow;"><span class="glyphicon glyphicon-th"></span> <u>Menu</u></a>
						</div>
						<div>
											
							<ul class="nav navbar-nav" style="color:white;">
							<li ><a href="admin.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
							<ul class="nav navbar-nav">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<span class="glyphicon glyphicon-user"></span>SEATS
					<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a href="viewstk.php"><span class="glyphicon glyphicon-user"></span>View SEATS</a></li>
					<><a href="stock.php"><span class="glyphicon glyphicolin-off"></span> Add Stock</a></li>
					</ul>					</li>

					< cla					li
ss="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<ul>
					<li><a href="gd_order.php"><span class="glyphicon glyphicon-user"></span> view all RESERVATIN</a></li>
					<li><a href="approved.php"><span class="glyphicon glyphicon-user"></span> Approved RESERVATION</a></li>
					<li><a href="declined.php"><span class="glyphicon glyphicon-user"></span> Declined RESERVATON</a></li>
					<li><a href="unconfirmed.php"><span class="glyphicon glyphicon-user"></span> Unconfirmed RESERVATION</a></li>
					</ul>
					<li class="active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<span class="glyphicon glyphicon-user"></span>customer
					<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a href="customer.php"><span class="glyphicon glyphicon-user"></span>View customer</a></li>
					</ul>
					</li>
						<li><a href="commadmin.php"><span class="glyphicon glyphicon-check"></span> view comments </a></li>
							</ul>
						</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-lg-9">
<a href="admin.php" class="btn btn-success "><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
<div class="panel-heading">
<h4>All customers</h4>
</div>
<div class="row">
<div class="col-lg-8">

</div>
<
<div class="panel-body">
<table class="table table-responsive table-bordered table-hover table-striped">
<tbody>

<!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<div class="footer" style="text-align:center">
&copy 2018. Copyright of GROUP7 BCS Y3S2 PROJECT. All rights reserved.
</div>
	</div>
</body>
</html>