<?php

$text = 'This is a Simple text.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi')."<br>";

// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'S');
?>