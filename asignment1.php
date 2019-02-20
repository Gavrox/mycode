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
For ($i=0; $i<count($arr);$i++){
    echo "<tr><td>".$arr[$i][0]." </td>";
    echo "<td>".$arr[$i][1]." </td>";
    echo "<td>".$arr[$i][2]." </td>";
    echo "<td>".$arr[$i][3]." </td>";
    
}
echo"</tr></table>";
?>