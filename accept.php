<?php
include("connection.php");

include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<form name=book action="" method="">
   <div id= "book2">
<?php
   	$user_id='';
   	$sql="SELECT* FROM trains ORDER BY id DESC LIMIT 100";
     $res=mysqli_query($conn,$sql);
     if ($res)
      {
     while ($row=mysqli_fetch_array($res)) 
     {
     $user_id=$row['id'];
     }
     }
     $sql="SELECT* FROM trains WHERE id=$user_id";
     $res=mysqli_query($conn,$sql);
     if ($res) 
     {
     	echo"<table>";
     	while ($row=mysqli_fetch_array($res))
        {
     	
     	echo "<th>AVAILABLE SEATS FOR TRAIN A</th>"."<tr><td>".$row['trainA']."<hr>"."<br>".



     	"<th>AVAILABLE SEATS FOR TRAIN A</th>"."<tr><td>".$row['trainB']."<hr>"."</td></tr>";
     	// 
     	"</td></tr>";

     	}
     	echo "</table>";

     }


?>
<!-- <hr>
<input type="button" name="buton" value="accept">
<input type="button" name="buton" value="decline"> -->


    </div>
</form>

</body>
</html>>