<?php
require "conn.php";
	If(isset($_POST['insert'])){
		// Get values from form 
$book=$_POST['book'];
$author=$_POST['author'];
$year=$_POST['year'];

$sql="INSERT INTO titles (book, author, year) VALUES  ('{$book}', '{$author}','{$year}')";
$result=mysqli_query($conn, $sql);		
		}

if($result){
echo "Successful";
}

else {
echo "ERROR";
}

mysqli_close($conn);
header("Location: insert2.php");
?>
