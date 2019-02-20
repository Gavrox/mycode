<?php
require "conn.php";
if(isset($_POST['submit'])){
	
	if(!empty($_POST['english']) && !empty($_POST['srpski'])) {
	$en=$_POST['english'];
	$sr=$_POST['srpski'];
	
	$sql="INSERT INTO reci(rec_en, rec_sr) VALUES ('{$en}', '{$sr}')";
	$result=mysqli_query($conn, $sql);	
		header("Location: recnik.php");
	
if($result){
echo "Successful";
}else {
echo "ERROR";
} 		
	}		else {
	echo "<div style='background-color:yellow'>";
	echo "All must be fill in";
	echo "<div>";
	echo "<a href='recnik.php'>Go again</a>";	
	}	
}
mysqli_close($conn);


	?>