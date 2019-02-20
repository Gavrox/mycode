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
	<h1>Delete books from base</h1>
	<br>
	<form action="delboy.php" method="post">
		<table border="1">
		<tr><th></th>		
			<th>Book title</th>
			<th>Author</th>
			<th>Year</th>
		</tr>
			<?php 
			while ($row = mysqli_fetch_array($query))
			{
			echo "<tr>";
			echo "<td><input type='checkbox' name='checkbox[]' value='" .$row['id']. "'></td>";
			echo "<td>" .$row['book']. "</td>";
			echo "<td>" .$row['author']. "</td>";
			echo "<td>" .$row['year']. "</td>";
			echo "</tr>";
			}
			echo "</table>";
			?>
			<input type="submit" name="delete" id="delete" value="Delete books">
	</form>
	<?php
		mysqli_close($conn);
		
		?>
</div>
</body>
</html>