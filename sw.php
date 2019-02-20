<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<title>HTML5</title>
</head>

<body>
<form action="" method="get">
<input type="number" name="number" id="broj" value="0">
<button type="submit" name="ok">OK</button>
</form>
    <?php
$secretNumber = 765;
if ($_GET['number'] == $secretNumber )
	{
		echo ' <p> Congratulations!!! </p> ';
	}
elseif( abs($_GET['number'] - $secretNumber) < 10 )
	{
		echo ' <p> You are near to the result!!! </p> ';
	}
else
	{
		echo ' <p> Try again!!!  </p> ';
	} 
?>
    </body>

</html>
