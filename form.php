<html>
<head>
	<title>
		ht2
	</title>
	 <script>
    function generate() {

        var a = parseInt(document.getnavintById("PASS").value);
        var ch = document.getnavintById("ch");

        for (i = 0; i < a; i++) {

           ch.innerHTML +='<input type="text" name=""></input>'

          
        }
    }
    </script>
</head>
<body>

	<form name="form1" action="PH2.php" method="POST">
	NAME<INPUT TYPE="TEXT" NAME="NM"  />
	ID<INPUT TYPE="TEXT" NAME="ID" />
	PASSENGERS<INPUT TYPE="TEXT" name="PASS" id="PASS" />
	 <input type="button" value="set" onclick="generate()" />
        <div id="ch"></div>
	<input type="submit" name ="sub" value="send">








</body>
</html>