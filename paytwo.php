<?php
include("connection.php");
session_start();
?>
<html>
<head>  <title> pay</title>
</head> 

<body>
  <?php
  if (isset($_POST['submit'])) {
             $x=$_POST['x'];
             $y=$_POST['y'];
             $z = $_SESSION['user_id'];
              $verify=$_SESSION['verify'];
           $sql="SELECT*FROM cabin WHERE verify='$y'";
               $res=mysqli_query($conn,$sql);
               if ($res)
               {
                if ($rows=mysqli_num_rows($res)>0) 
                {
                 $sql = "UPDATE cabin SET mode_payment = '$x' WHERE id = $z";
               $res=mysqli_query($conn,$sql);
                $_SESSION['user_id']=mysqli_insert_id($conn);
               if (!$res) 
               {
                die("mysqli failed".mysqli_error($conn));
               }
               else
               {
                header("location:cabinticket.php");
               }
                }
                else
                {
                     echo "<script>
                      alert('invalid transaction id.click ok to go back');
                      window.location.href='pay2.html';
                      </script>";


                }
               }
             
             
  }
  ?>
  </body>
  </html>
