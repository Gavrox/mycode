<?php
if(isset($_GET['drzava']))
{
$niz=array("Srbija"=>"Beograd","Francuska"=>"Pariz","Engleska"=>"London","Spanija"=>"Madrid");
echo $niz[$_GET['drzava']];
return;
}
?>
<script type="text/javascript">
function ajax(drzava)
{
var xmlHttp;
try
  {  //Prvo proveravamo operu FireFox i Safari
      xmlHttp=new XMLHttpRequest();  
  }
catch (e)
  {  // Zatim, ukoliko inicijalizacija objekta nije uspešna, pokušavamo sa IE (6+ pa 5+)
  try { xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");    }
  catch (e)
    {    try  {      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");      }
    catch (e)
      { //Ako ne uspe inicijalizacija, prijavljujemo grešku i zatvaramo funkciju
alert("Inicijalizacija nije izvršena"); return false; }    
    }  
  }
xmlHttp.onreadystatechange=function()
    {               
        if(xmlHttp.readyState==4)
        document.getElementById("glavniGrad").innerHTML=xmlHttp.responseText;
    }
xmlHttp.open("GET","test.php?drzava="+drzava,true);
xmlHttp.send(null);
}
</script>
<select onchange="ajax(this.options[this.selectedIndex].value)">
<option >Odaberite drzavu:</option>
<option value="Srbija">Srbija</option>
<option value="Francuska">Francuska</option>
<option value="Engleska">Engleska</option>
<option value="Spanija">Spanija</option>
</select>
<br>
Glavni grad: <div id="glavniGrad"></div>
