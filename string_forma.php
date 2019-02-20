
















<!doctype html>
<html lang="en">
    <head><title>String</title><meta charset="utf8"></head>
    <body>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           <label for="string">Unesite zeljeni string</label>
            <input type="text" id="string" name="string">
                <input type=submit id="submit" name="submit" value="Posalji">
           </form>
    
    
    <?php

if (isset($_POST["submit"])) {
    
    
   $string=$_POST["string"]; 
    if ($string!="") {
    
    echo "Prvo slovo stringa je:"." ".$string[0];
    echo "<br>";
    echo "String je: $string";
    $broj_k=strlen($string);
    echo "<br>";
        echo "Broj karaktera je: $broj_k <br>";
        $string_unazad="";
        
    
    for ($i=$broj_k-1; $i>-1;$i--) {
        
        
         $string_unazad.=$string[$i];
    }
        echo "String unazad:". $string_unazad. "<br>";
    
    }
    else {
        echo "Uneli ste prazan string";
    }
    echo "<br>";
    $velika_slova=strtoupper($string);
    echo "Ispis velikim slovima: $velika_slova";
}



?>

    
    </body>
</html>