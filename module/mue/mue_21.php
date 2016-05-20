<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext_inputs.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ: Probleme Übung 8a " );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Übersetzungsverfahren: Übung 1" );

// Text
$tpl->assign( "text", "Nenne die drei Übersetzungsverfahren." );

// Kein Beispiel in dieser Aufgabe
$tpl->assign( "noExample", "hidden");


// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "inputVal()");

// Richtige Lösungen
$tpl->assign("loesung1", "Direktes Übersetzungsmodell");
$tpl->assign("loesung2", "Transferansatz");
$tpl->assign("loesung3", "Interlingua-Modell");
$tpl->assign("loesung4", "ÿ");
$tpl->assign("loesungen", "Direktes Übersetzungsmodell,Transferansatz,Interlingua-Modell");

// Soll input 4 vorhanden sein?
$tpl->assign("input4", "hidden");


// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "Ich erinnere mich, dass die drei Verfahren so anfingen:
<ul style=\"list-style-type:decimal\">
	<li>Direktes...</li>
	<li>Transfer...</li>
	<li>Interlingua...</li>
</ul>
Probier mal aus. ;)" );


include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>