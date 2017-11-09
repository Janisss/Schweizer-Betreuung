<?php
if(isset($_POST['submit'])) {
	$emailbody =  'Name: '.$_POST['name']."\n"
	.'Vorname: '.$_POST['vorname']."\n"
	.'Email: '.$_POST['email']."\n"
	.'Telefonnummer: '.$_POST['tel']."\n"
	.'Pflegestufe: '.$_POST['pflegestufe']."\n"
	.'Gewicht in KG: '.$_POST['gewicht']."\n"
	.'PLZ und Ort des Arbeitseinsatzes: '.$_POST['plz-arbeit']."\n"
	.'Krankheiten und Gebrechen: '.$_POST['krankenheiten']."\n"
	.'Gewünschtes Geschlecht: '.$_POST['gewunschtes']."\n"
	.'Gewünschte Deutschkenntnisse: '.$_POST['deutsch']."\n"
	.'Sonstige Bemerkungen: '.$_POST['sonstige']."\n";
	
	mail('info@get-care.de', 'Mail von GETcare DE', $emailbody); //info@get-care.de
	header("Location:http://get-care.de/preiseanfrage_danke.html");

}
?>