<?php
include "menu.php";
?>
<html>
<head>
<title> Library </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrap">
<td><form name="form1" method="post" action="#">
<table id="tab">
<tr>
<td colspan="3"><strong>Insert new book</strong></td>
</tr>
<tr>
<td>Book name</td>

<td><input name="book" type="text" id="book"></td>
</tr>
<tr>
<td>Author</td>

<td><input name="author" type="text" id="author"></td>
</tr>
<tr>
<td>Year</td>

<td><input name="year" type="number" id="year"></td>
</tr>
<tr>
<td><input type="submit" name="insert" ></td>
</tr>
</table>
</form>
</div>

<?php
require "conn.php";	
error_reporting(0);
If(isset($_POST['insert'])){
$book=$_POST['book'];
$author=$_POST['author'];
$year=$_POST['year'];

$sql="INSERT INTO titles (book, author, year) VALUES  ('{$book}', '{$author}','{$year}')";
$result=mysqli_query($conn, $sql);		
		}

if($result){
echo "<div id='message'>Successful";
}

else {
echo "All field must be fill in!";
echo "</div>";
}

mysqli_close($conn);

?>

</body>