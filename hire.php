<?php
session_start();
?>

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
<html>
<head>  <title> hirepay</title>
</head> 

<body>
  <?php
  
  if (isset($_POST['submit'])) {
$name=$_POST['name'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$id_no=$_POST['id_no'];
$phoneno=$_POST['phoneno'];
$mail=$_POST['mail'];
$Terminal=$_POST['x'];
$cabin=$_POST['y'];
$date=$_POST['date'];
$pass=$_POST['pass'];
$purpose=$_POST['purpose'];
$cost=$_POST['cos'];
 $verify=rand(1000000,100000000);
     $_SESSION['verify']=$verify;
          $sql="INSERT INTO cabin(name,lname,gender,id_no,phoneno,mail,Terminal,cabin,date,pass,purpose,cost,verify)
             VALUES ('$name','$lname','$gender','$id_no','$phoneno','$mail','$Terminal','$cabin','$date','$pass','$purpose','$cost','$verify')";
               $res=mysqli_query($conn,$sql);
               $_SESSION['user_id']=mysqli_insert_id($conn);
               if (!$res) 
               {
                die("mysqli failed".mysqli_error($conn));
               }
               else{
                header("location:hirepay.html");
               }
  }
  ?>
  </body>
  </html>
