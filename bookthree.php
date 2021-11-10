<?php
include("connection.php");
session_start();
?>
<html>
<head>
  <title>cabin</title>
</head>
<body>


  <?php
  if (isset($_POST['submit'])) {
      $name=$_POST['name'];
      $lname=$_POST['lname'];
      $gender=$_POST['gender'];
      $id_number=$_POST['id_number'];
      $phone=$_POST['phone'];
      $mail=$_POST['mail'];

      $code=rand(1000000,100000000);
       $z = $_SESSION['user_id'];
       $_SESSION['code']=$code;
             $sql = "UPDATE bookone SET name = '$name', lname= '$lname',gender= '$gender',id_number='$id_number',phone='$phone',mail='$mail',code='$code' WHERE id = $z";
  $res=mysqli_query($conn,$sql);
       $res=mysqli_query($conn,$sql);
          if (!$res) 
            {
              die("query failed".mysqli_error($conn));
            }
           else
           {
           header("location:pay.html");
          }

          }
  ?>
  </body>
  </html>