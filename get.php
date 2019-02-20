
 <?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
       }
$_GET['name']=$ime;
$_GET['age']=$god;
if($god<21){
    echo "Too young for die";
    }elseif ($god>21 & $god<50){
    echo "Dobro je";}
else{
    echo "Razligu";
}
      //exit();
   
?>