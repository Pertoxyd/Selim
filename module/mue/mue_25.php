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
$tpl->assign( "module_headline", "Übersetzungsverfahren: Übung 5" );
// Beispielsatz
$tpl->assign( "beispiel", "" );
$tpl->assign( "noExample", "hidden" );

// Text
$tpl->assign( "text", "Nenne zwei MÜ-Systeme, die auf dem Transferansatz beruhen, falls sie dir nicht einfallen kannst du mal iWi fragen." );

// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "inputVal()");

//Unnötige Inputs ausblenden
$tpl->assign("input3", "hidden");
$tpl->assign("input4", "hidden");

// Richtige Lösungen
$tpl->assign("loesungen", "eurotra,Lingenio");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Lösungsvorschlag" );
$tpl->assign( "iwisTipp", "
EUROTRA und Lingenio wären zwei mögliche Lösungen.
" );



include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>