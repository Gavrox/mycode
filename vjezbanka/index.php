<h2>Fill in!</h2>
<form action="" method="POST">
	<label for="fname">Name:<input type="text" name="fname"></label>
	<label for="lname">Last Name:<input type="text" name="lname"></label>
	<label for="age">Age:<input type="text" name="age"></label>
	<input type="submit" name="submit" value="Submit">
</form>
<div style="background-color: darkkhaki">
<?php
require "clasperson.php";
	$id=1234;
	@$age=$_POST['age'];
	@$fname=$_POST['fname'];
	@$lname=$_POST['lname'];
	
	$persona = new User ($age, $fname, $lname);
			echo "<h3>" . $persona->fullname($id)."</h2>";
			echo "<h4>" . $persona->age()."</h2>";	
			
	
?>
	</div>




