<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<title>HTML5</title>
<style> tr {
    border:solid 3px red;}
    table {
        background-color: yellow;
    }
	
	
	
    
    </style> 
    
    </head>

<body>
<table border="solid 1px">
    
    <?php
for ($i=1,$x=1; $i<11; $i++,$x++){
$rez=$i*$x;
    echo "<tr>";
    echo "<td>$x</td>";
    echo "<td>$i</td>";
    echo "<td>$rez</td>";
    echo "</tr>";
    
}
 
?>
  </table>

</html>