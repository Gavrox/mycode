<?php
$arr = array(
	array( 1, "Peter", "Andersen", "peter@gmail.com" ), 
    array( 2, "John", "Miller", "john@gmail.com" ),
	array( 3, "Thomas", "Swift", "thomas@gmail.com")
);
echo "<table border='1px'>";
echo "<tr><th>Id</th>";
echo "<th>Fname</th>";
echo "<th>Lname</th>";
echo "<th>E-mail</th></tr>";
for ($i=0; $i<count($arr);$i++){
    echo "<tr>";
    for ($j=0; $j<count($arr[$i]);$j++ ){
        
        echo "<td>" .$arr[$i][$j]. "</td>";
    }
    
   echo "</tr>";
    
}
echo"</table>";
?>