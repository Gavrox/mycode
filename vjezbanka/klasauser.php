<h2>Fill in!</h2>
<form action="#" method="post">
	<label for="fname">Name:<input type="text" name="fname"></label>
	<label for="lname">Last Name:<input type="text" name="lname"></label>
	<label for="age">Age:<input type="text" name="age"></label>
	<input type="submit" value="submit">
</form>

<?php


	$fname1=$_POST['fname'];
	$lname1=$_POST['lname'];
	$age1=$_POST['age'];		

		
require "clasperson.php";

$persona = new Person($age1, $fname1, $lname1);
?>
<div style="background-color: yellowgreen; width:250px; padding: 15px">

	
<?php
echo "<h3>" . $persona->fullname()."</h2>";
echo "<h4>" . $persona->age()."</h2>";
?>
	</div>