<?php
if(isset($_POST['submit'])) {
	$emailbody = 
	 '<center><img src="http://Schweizer-Betreuung.de/.svg" width="300"></center>'."<hr>"
	.'<span style="color:Brown">Anrede: </span>'.$_POST['anrede']."<hr>"
	.'<span style="color:Brown">Name: </span>'.$_POST['name']."<hr>"
	.'<span style="color:Brown">Vorname: </span>'.$_POST['vorname']."<hr>"
	.'<span style="color:Brown">Email: </span>'.$_POST['email']."<hr>"
	.'<span style="color:Brown">Telefonnummer: </span>'.$_POST['nummer']."<hr>"
	.'<span style="color:Brown">Krankheiten oder Gebrechen: </span>'.$_POST['krankheiten']."<hr>"
	.'<span style="color:Brown">Fahrausweis benötigt: </span>'.$_POST['fahrausweis']."<hr>"
	.'<span style="color:Brown">Gewünschter Start: </span>'.$_POST['start']."<hr>"
	.'<span style="color:Brown">Gewünschte Deutschkentnisse: </span>'.$_POST['gewunschte']."<hr>"
	.'<span style="color:Brown">Sonstige Bemerkungen: </span>'.$_POST['sonstige']."<hr>"."<br>";
		
	mail('info@ShweizweBetreuung.ch', '-> ShweizweBetreuung CH FORM', $emailbody ,'Content-Type: text/html; charset=UTF-8');
	header("Location:./preiseanfrage_danke.html");
}
?>