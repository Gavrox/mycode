<?php
$i = 0;
while ($i++ < 3) {
    echo $i ."<br>";
    echo "Outer<br />\n";
    while (1) {
        echo "Middle<br />\n";
        while (1) {
            echo "Inner<br />\n";
            
            continue 3;
            echo $i ."<br>";
        }
        echo "This never gets output.<br />\n";
    }
    echo "Neither does this.<br />\n";
}
?>