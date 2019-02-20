<!DOCTYPE html>
<html lang="en">

<head>
	<title> Discount price </title>
	<meta charset="UTF-8">
	<style>
		<?php $isNew=rand(0, 1);

		if ($isNew) {
			$new="NOVI PROIZVOD U BAZI";
			echo ".border{
border: 1px solid red;
			font-family: arial;
			color: green;
		}

		";

		}

		?>
		.border2 {
			border: 4px solid green;
		}
h2 {
	color: orange;
}
	</style>
</head>

<body>
	<?php
	$price =  rand(1,100);
	$discount = 0.8;
	
	if($price >50) {
		$discountPrice = $price*$discount;
		echo "<h1>The item is on the discount:<span class = 'border'>" . $discountPrice . "BAM (<del>" . $price . "BAM</del>)</span>!</h1>";
	}else{
	echo "<h1>The item is not on the discounts: <span class = 'border2'>" . $price . " BAM!</span></h1>";
	}
if ($isNew) {
	echo "<h2>" . $new . "</h2>";
}
	 
	 ?>

</body>

</html>
