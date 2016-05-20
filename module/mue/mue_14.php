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
$tpl->assign( "module_headline", "Probleme: Übung 5" );

// Text
$tpl->assign( "text", "Diese drei englischen Sätze haben in der deutschen Übersetzung ein gemeinsames Wort. 
Finde heraus, welches es ist, trage es in den nebenstehenden Kasten ein und klicke auf den Lösungsbutton." );

// Aufgabennstellung
$tpl->assign( "beispiel", "- There are certain questions which they don't want to answer.<br />
- He speaks with a firm voice.<br />
- She must take medicine at particular times." );

// Funktion zur Validierung
$tpl->assign( "ValidateFunction", "inputVal()" );

//Lösungen
$tpl->assign( "loesungen", "bestimmt" );

// Überzählige Inputs ausblenden
$tpl->assign( "input1", "" );
$tpl->assign( "input2", "hidden" );
$tpl->assign( "input3", "hidden" );
$tpl->assign( "input4", "hidden" );

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "Es hilft, wenn du Dir die Sätze ganz bewusst ins Deutsche übersetzt. Falls du Schwierigkeiten hast, versuche doch
bei einem Übersetzungsprogramm Hilfe zu bekommen.
<br />
Wie wäre es zum Beispiel mit dem Google Translator?
<br />
<br />
<a href='https://translate.google.de/' target='_blank'>Google Translator  <span class='glyphicon glyphicon-new-window'></span></a>
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");

// Und die Seite anzeigen
$tpl->display();
?>