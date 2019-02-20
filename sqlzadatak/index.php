<?php
include "menu.php";
require "conn.php";
$msq = "SELECT * FROM titles";
$query = mysqli_query($conn, $msq);
?>
<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Delete multiple books</title>
</head>

<body>
<div id="wrap">
	<h1>Display books from base</h1>
	<br>
	
		<table id="tab" border="1">
		<tr>	
			<th>Book title</th>
			<th>Author</th>
			<th>Year</th>
		</tr>
			<?php 
			while ($row = mysqli_fetch_array($query))
			{
			echo "<tr>";
			
			echo "<td>" .$row['book']. "</td>";
			echo "<td>" .$row['author']. "</td>";
			echo "<td>" .$row['year']. "</td>";
			echo "</tr>";
			}
			echo "</table>";
			?>
			
	<?php
		mysqli_close($conn);
		
		?>
</div>
</body>
</html>