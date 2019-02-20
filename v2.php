<?php

$startValue = 10; //početak puta
$endValue = 120; //kraj puta
$trip = 150; //dužina pređenog puta
$totalTrip = $endValue - $startValue;
$previse = $totalTrip-$trip;
$premalo=$trip-$totalTrip;
    

If ($trip > $totalTrip){
    echo "You passed $premalo more than needed";    
}elseif ($trip < $totalTrip) {
    echo "You need $previse to go";  
}else {
    echo"You passed EXACT DISTANCE";
};
?>
