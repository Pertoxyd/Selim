<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext_inputs.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ: Probleme: Übung 4 " );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Probleme: Übung 4" );
// Beispielsatz
$tpl->assign( "beispiel", "Ich traf gestern Frau Müller. Erinnerst Du Dich an sie?" );
// Text
$tpl->assign( "text", "Finde vier Übersetzungen für den Begriff 'sie' und trage sie in die untenstehenden Kästchen ein. Falls du nicht weiter weißt, frag doch mal iWi." );

// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "inputVal()");

// Richtige Lösungen
$tpl->assign("loesungen", "they,she,them,her");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Lösungsvorschlag" );
$tpl->assign( "iwisTipp", "Mit \"sie\" könnte
<ul style=\"list-style-type:decimal\">
	<li>they</li>
	<li>she</li>
	<li>them</li>
	<li>her</li>
</ul>
gemeint sein." );



include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>