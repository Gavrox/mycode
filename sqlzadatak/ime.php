<?php
require_once("form.inc");
echo "<html><head><title>Telefonski imenik</title></head><body>";
$phone_form = new Form("process.php","Zapamti broj");
$phone_form->addField("first_name","Ime");
$phone_form->addField("last_name","Prezime");
$phone_form->addField("phone","Telefon");
echo "<h3>Popunite sledeću formu:</h3>";
$phone_form->displayForm();
echo "</body></html>";
?>