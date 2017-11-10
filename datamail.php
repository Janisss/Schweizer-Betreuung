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
	
	mail('info@Schweizer-Betreuung.de', 'Mail von ShweizweBetreuung DE', $emailbody); //info@Schweizer-Betreuung.de
	header("Location:http://Schweizer-Betreuung.de/preiseanfrage_danke.html");

}
?>