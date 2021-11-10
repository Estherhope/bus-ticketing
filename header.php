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
                          <li><a href="accept.php">AVAILABLE SEATS
                          </a></li>
                    

                          </ul>
</li>
<li><a href="" class"active"> CABIN</a>
	<ul>
                          <li><a href= "cubinreservation.php" class="active">RESERVED CABIN</a></li>
                   

                          </ul>

<li><a href="comment.php">VIEW COMMENT</a></li>
<li><a href="Report.php">VIEW REPORT</a></li>
<li><a href="adminindex.php" class="glyphicon glyphicon-off">  logout</a></li>
</ul>
</div>

