<?php

function str_reverse($str){
    $rez = "";
    for($i=strlen($str)-1; $i>=0; $i--){
        $rez.=$str[$i];
	}
	return $rez;
}
$text = "my string"; 
echo str_reverse($text);
?>
