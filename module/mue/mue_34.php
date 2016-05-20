<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_single_choice.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Software: Übung 5" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Software: Übung 5" );

// Text
$tpl->assign( "text", "Bei welcher Art von Textsorte sind Translation Memories besonders sinnvoll?
Klicke die richtigen Lösungen an!" );

// Multiple Choice Optionen
// Pro Option muss ein Radiobutton nach folgendem Schema eingefügt werden:
$tpl->assign( "single_choice", "
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Bei Texten mit immer wiederkehrendem Vokabular</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Bei Wetterberichten</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Für große Mengen gleicher Textsorten</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='checkbox' />
		<span>Bei Werbung</span>
	</label>
" );


// Beispiel
$tpl->assign( "beispiel", "" );
// Beispiel verstecken
$tpl->assign( "beispielVerstecken", "hidden" );

// Funktion zur Validierung
$tpl->assign("ValidateFunction", "checkBoxVal()" );

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "" );
$tpl->assign( "iwisTipp", "" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>