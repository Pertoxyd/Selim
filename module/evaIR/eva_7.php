<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_single_choice.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Bewertungskriterien" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Bewertungskriterien" );

// Text
$tpl->assign( "text", "Welche Eigenschaften sind der Relevanz zuzuordnen?" );

// Multiple Choice Optionen
// Pro Option muss ein Radiobutton nach folgendem Schema eingefügt werden:
$tpl->assign( "single_choice", "
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='checkbox' />
		<span>Relevanz ist schwer auf eine binäre Skala abzubilden.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Relevanz ist eine absolute Größe.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='checkbox' />
		<span>Relevanz ist situationsabhängig.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Relevanz ist gut messbar.</span>
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