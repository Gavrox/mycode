<?php

$x = 7; //ogranicava broj kolona
$y = 5; //ogranicava broj redova


//petlja za redove
for ($i=0; $i<$y; $i++){
   
    //petlja za kolone
    for ($j=0; $j<$x; $j++){
        if ($i==0 || $i==$y-1){
            echo "X";
       
        }else{
            if ($j==0 || $j==$x-1){
                echo "X";
          
            }else{
                echo "H";
            }
                        
        }
    }
    echo "<br>";
}

?>