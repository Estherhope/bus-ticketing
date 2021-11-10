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
             $code=$_SESSION['code'];
        $train = $_SESSION['train'];
      $seats = '';
      $sql = "SELECT $train FROM trains where class =$class";
      $res=mysqli_query($conn,$sql);
      if ($res) {
       while ($row = mysqli_fetch_array($res)) {
         $seats = $row[$train];
       }
       $seats = $seats - $nopass;
       if ($seats <= 0) {
         echo "No more Seats Available";
       }else{
         $sql = "UPDATE trains SET $train = $seats";
          $res=mysqli_query($conn,$sql);
          if ($res) {
            
         }

       }
        
      }
             $sql="SELECT*FROM bookone WHERE code='$y'";
             $res=mysqli_query($conn,$sql);
             if ($res)
               {
              if (mysqli_num_rows($res) > 0) 
               {
             $sql = "UPDATE bookone SET mode_payment = '$x'  WHERE id = $z";
               $res=mysqli_query($conn,$sql);
               if (!$res) 
               {
                die("mysqli failed".mysqli_error($conn));
               }
               else
               {
               header("location:booked.html");
               }
               }
              else
              {
              echo "<script>
                      alert('invalid transaction id.click ok to go back');
                      window.location.href='pay.html';
                      </script>";
              }
              }
              }
  ?>
  </body>
  </html>
