<?php

?>
<head>
	<title>navin</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<div id="header">
<img src="icon/bus.jpeg" alt="">
	
</div>

<form id=signup action="log.inc.php" method="POST">
	<p>Admin log in</p>
	<br>

	User name<br><input type="text" name="user" id=user required placeholder="Enter user name">
	<br>
	Password<br><input type="password" name="pass" id=pass required placeholder="Enter valid password">
	<br>
	<br>
	<input type="submit" name="submit" value="LOGIN">

</form>
