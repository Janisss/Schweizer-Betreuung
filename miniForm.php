<?php
if(isset($_POST['submit'])) {
	$emailbody =  'Name und Vorname: '.$_POST['name']."\n"
	.'Email: '.$_POST['email']."\n"
	.'Beschreibung: '.$_POST['besch']."\n";
	
	mail('info@getcare.ch', 'Mail von GETcare CH', $emailbody); // info@get-care.de
	header("Location:./kontakt_danke.html");
}

	else {
		echo ("Error");
	}
?>