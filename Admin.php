<?php
include('connection.php');
include("header.php");
if(!isset($_SESSION['admin'])){
header("LOCATION:adminindex.php");
}

?>