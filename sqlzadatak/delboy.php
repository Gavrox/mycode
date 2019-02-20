<?php
require "conn.php";
	If(isset($_POST['delete'])){
		$chk=$_POST['checkbox'];
		foreach($chk as $id){
			mysqli_query($conn, "DELETE FROM titles WHERE id=" .$id);
			}
		header("Location: multidel.php");
		}
mysqli_close($conn);
?>