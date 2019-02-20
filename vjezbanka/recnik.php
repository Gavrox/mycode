<html>
<head>
<meta charset="utf-8">
<title>RECNIK</title>
</head>

<body>
<h1>Rečnik</h1>
<br>
<form action="obrada.php" method="post" name="forma1">
	<label for="english">Eng<input type="text" name="english" id="english"></label>
	<label for="srpski">Sr<input type="text" name="srpski" id="srpski"></label>
	<input type="submit" name="submit" id="submit" value = "submit">
</form>

<?php
require "conn.php";
	$sql2="SELECT * FROM reci ORDER BY rec_en";
	$queryall = mysqli_query($conn, $sql2);
			while ($row = mysqli_fetch_array($queryall))
			{
			echo "<table style='border:solid 1px'>";
			echo "<th>English</th>";
			echo "<th>Srpski</th>";
			echo "<tr>";
			
			echo "<td style='border: solid 1px'>" .$row['rec_en']. "</td>";
			echo "<td style='border: solid 1px'>" .$row['rec_sr']. "</td>";
			echo "</tr>";
			}
			echo "</table>";
			

	
mysqli_close($conn);
	
	?>
</body>
</html>