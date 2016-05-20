<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext_inputs.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Probleme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Probleme: Übung 2" );

// Text
$tpl->assign( "text", "Womit könnte das Programm bei der Übersetzung dieses Satzes Schwierigkeiten bekommen? 
Trage das entsprechende Wort in den untenstehenden Kasten ein und klicke auf den 
Lösungsbutton." );

// Aufgabennstellung
$tpl->assign( "beispiel", "Die Firma wird nächste Woche drei neue Mitarbeiter einstellen." );

// Funktion zur Validierung
$tpl->assign( "ValidateFunction", "inputVal()" );

// Lösungen (kommasepariert eintragen)
$tpl->assign( "loesungen", "einstellen" );

// Überzählige Inputs ausblenden
$tpl->assign( "input1", "" );
$tpl->assign( "input2", "hidden" );
$tpl->assign( "input3", "hidden" );
$tpl->assign( "input4", "hidden" );


// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Also mir fallen da folgenden Beispielsätze ein, in denen das Problem der Maschine auffällt:<br />
<br />
- Ich stelle mich auf Sonnenschein ein.<br />
- Würden Sie bitte das Rauchen einstellen?
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");

// Und die Seite anzeigen
$tpl->display();
?>