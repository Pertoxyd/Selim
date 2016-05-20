<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext_inputs.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ: Probleme: Übung 3" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Probleme: Übung 6" );

// Text
$tpl->assign( "text", "Finde in den folgenden Sätzen einen deutschen Begriff, der zwei Entsprechung im Englischen hat, die zudem völlig unterschiedliche Dinge bezeichnen." );


// Beispiel
$tpl->assign( "beispiel", "Susanne kam völlig ausgehungert aus der Schule. Die Schultasche schleuderte sie beim Betreten des Hauses in eine Ecke 
und stürmte sofort in die Küche. \"Mama, was gibt es heute zu essen?\" 
Die Antwort lautete:\"Nudeln mit Tomatensauce.\" Das freute Susanne sehr, denn Nudeln mit Tomatensauce waren schon immer ihr liebstes Gericht." );

// Funktion zur Validierung
$tpl->assign( "ValidateFunction", "inputVal()" );

//Lösungen
$tpl->assign( "loesungen", "Gericht" );

// Überzählige Inputs ausblenden
$tpl->assign( "input1", "" );
$tpl->assign( "input2", "hidden" );
$tpl->assign( "input3", "hidden" );
$tpl->assign( "input4", "hidden" );

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "");
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "Es handelt sich bei der Lösung um ein Substantiv!" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>