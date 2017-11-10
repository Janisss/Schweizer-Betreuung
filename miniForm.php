<?php
if(isset($_POST['submit'])) {
	$emailbody =  'Name und Vorname: '.$_POST['name']."\n"
	.'Email: '.$_POST['email']."\n"
	.'Beschreibung: '.$_POST['besch']."\n";
	
	mail('info@ShweizweBetreuung.ch', 'Mail von ShweizweBetreuung CH', $emailbody); // info@Schweizer-Betreuung.de
	header("Location:./kontakt_danke.html");
}

	else {
		echo ("Error");
	}
?>