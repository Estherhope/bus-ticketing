<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="navin";
 $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
 
    if(mysqli_connect_errno())
    {
	die("connection failed". mysqli_connect_error());
    }


?>