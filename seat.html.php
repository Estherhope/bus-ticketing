<!DOCTYPE html>
<html>
<head>
	<title>seats</title>
	<style type="text/css">
	#body{
		background-color: black;
	}
	#table{
		table-layout: none;
		margin-right: 30px;
		margin-left: 50px;

		float:left auto;
		float: right auto;


	}
		td{
			padding: 8px;
			background-color:#def;
			float: left auto;
			text-align: center;
			font-weight: bold;

		}
	</style>
</head>
<body>
<table border="4" id="seattable">
<caption>CABIN  ONE SEATS</caption>
	<tr>
	
		<td id="tdseat1" onclick="content(this)">1</td>
		<td id="tdseat2" onclick="content(this)">2</td>
		<td id="tdseat3" onclick="content(this)">3</td>
	</tr>

	<tr>
		
		<td id="tdseat4" onclick="content(this)">4</td>
		<td id="tdseat5" onclick="content(this)">5</td>
		<td id="tdseat6" onclick="content(this)">6</td>
	</tr>
	<tr>
		<td id="tdseat7" onclick="content(this)">3</td>
		<td id="tdseat8" onclick="content(this)">6</td>
		<td id="tdseat9" onclick="content(this)">9</td>
	</tr>
	<tr>
		<td id="tdseat10" onclick="content(this)">10</td>
		<td id="tdseat11" onclick="content(this)">11</td>
		<td id="tdseat12" onclick="content(this)">12</td>

	</tr>
	<tr>
		<td id="tdseat13" onclick="content(this)">13</td>
		<td id="tdseat14" onclick="content(this)">14</td>
		<td id="tdseat15" onclick="content(this)">15</td>
	</tr>
	</tr>
	<td id="tdseat4" onclick="content(this)">16</td>
		<td id="tdseat17" onclick="content(this)">17</td>
		<td id="tdseat18" onclick="content(this)">18</td>
	</tr>
	</tr>
	<td id="tdseat19" onclick="content(this)">19</td>
		<td id="tdseat20" onclick="content(this)">20</td>
		<td id="tdseat21" onclick="content(this)">21</td>
	</tr>
	</tr>
	<br/>
	<hr>
</table>
<p id="para"></p>
<table border="4" id="seattable">
<caption>CABIN  TWO SEATS</caption>
	<tr>
	
		<td id="tdseat1" onclick="content(this)">1</td>
		<td id="tdseat2" onclick="content(this)">2</td>
		<td id="tdseat3" onclick="content(this)">3</td>
	</tr>

	<tr>
		
		<td id="tdseat4" onclick="content(this)">4</td>
		<td id="tdseat5" onclick="content(this)">5</td>
		<td id="tdseat6" onclick="content(this)">6</td>
	</tr>
	<tr>
		<td id="tdseat7" onclick="content(this)">3</td>
		<td id="tdseat8" onclick="content(this)">6</td>
		<td id="tdseat9" onclick="content(this)">9</td>
	</tr>
	<tr>
		<td id="tdseat10" onclick="content(this)">10</td>
		<td id="tdseat11" onclick="content(this)">11</td>
		<td id="tdseat12" onclick="content(this)">12</td>

	</tr>
	<tr>
		<td id="tdseat13" onclick="content(this)">13</td>
		<td id="tdseat14" onclick="content(this)">14</td>
		<td id="tdseat15" onclick="content(this)">15</td>
	</tr>
	</tr>
	<td id="tdseat4" onclick="content(this)">16</td>
		<td id="tdseat17" onclick="content(this)">17</td>
		<td id="tdseat18" onclick="content(this)">18</td>
	</tr>
	</tr>
	<td id="tdseat19" onclick="content(this)">19</td>
		<td id="tdseat20" onclick="content(this)">20</td>
		<td id="tdseat21" onclick="content(this)">21</td>
	</tr>
	</tr>
</table>
<p id="para"></p>
<script>
	function content(elem){
		elem.style.backgroundColor="green";

		var p=document.getnavintById("para");
		p.innerHTML="clicked " + ""+ elem.innerHTML;
	}
</script>
</body>
</html>