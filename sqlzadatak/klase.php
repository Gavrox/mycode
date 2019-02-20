<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
class Form
{
 var $fields=array(); # sadrži imena i oznake polja
 var $processor; # ime programa koji procesira formu
 var $submit = "Submit Form"; # vrednost dugmeta za potvrdu
 var $Nfields = 0; # broj polja dodatih na formu
 /* Konstruktor: Korisnik prosleđuje ime skripta kom
 * se šalju podaci iz forme ($processor) i tekst koji će
 * biti prikazan na dugmetu za potvrdu.
 */
 function __construct($processor,$submit)
 {
  $this->processor = $processor;
  $this->submit = $submit;
 }
 /* Funkcija za prikazivanje forme.
 */
 function displayForm()
 {
  echo "<form action='{$this->processor}' method='post'>";
  echo "<table width='100%'>";
  for($j=1;$j<=sizeof($this->fields);$j++)
  {
   echo "<tr><td align=\"right\">
   {$this->fields[$j-1]['label']}: </td> \n";
   echo "<td>
   <input type='text'
   name='{$this->fields[$j-1]['name']}'>
   </td></tr>\n ";
  }
  echo "<tr><td colspan=2 align='center'>
   <input type='submit'
   value='{$this->submit}'></td></tr>\n ";
  echo "</table>";
 }
 /* Funkcija koja dodaje polje na formu. Korisnik treba da 
 * prosledi ime polja i oznaku koja će se prikazati.
 */
 function addField($name,$label)
 {
  $this->fields[$this->Nfields]['name'] = $name;
  $this->fields[$this->Nfields]['label'] = $label;
  $this->Nfields = $this->Nfields + 1;
 }
}
	$ime="ime.php";
	$dugme="Pošalji";
	$pp=new Form ($ime, $dugme);
	$pp=displayForm();
	
?>
</body>
</html>