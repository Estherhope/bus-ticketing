<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>  contact us</title>
</head>
<body>
	<?php
          if (isset($_POST['submit'])) {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $subject=$_POST['subject'];
          $comment=$_POST['comment'];

          if ($phone<=10 && $phone>=15)
          {
            echo "invalid phone number";
          }else
          {
          	 $phone=$_POST['phone'];
          }

       
          $sql="INSERT INTO comment(name,email,phone,subject,comment)
          VALUES('$name','$email',' $phone',' $subject','$comment')";
          $res=mysqli_query($conn,$sql);
          if (!$res) 
          {
          	echo ("mysql failed".mysqli_error($conn));;

          }
          else
          {

            echo "<script>
                      alert('THANKS FOR YOUR COMMENT');
                      window.location.href='contact.html';
                      </script>";
          }
          }



	?>

</body>
</html>