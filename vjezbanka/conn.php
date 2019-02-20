<?php
$conn = mysqli_connect("localhost","root","","recnik");
if (!$conn){
	die("Connection failed! " . mysqli_connect_error());
}
?>