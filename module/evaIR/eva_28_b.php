<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_single_choice.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Benutzerstandpunkt (3/3)" );

// Text
$tpl->assign( "text", "Welcher Benutzer ist hier am zufriedensten bei" );

// Single Choice Optionen
// Pro Option muss ein Radiobutton nach folgendem Schema eingefügt werden:
$tpl->assign( "single_choice", "
	<p>S1:</p>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='radio' name='aufgabe'/>
		<span class='solution'>B1</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe' />
		<span>B2</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input  type='radio' name='aufgabe'	/>
		<span>B3</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe' />
		<span>nicht eindeutig</span>
	</label>
	<p>S3:</p>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe2'/>
		<span>B1</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe2' />
		<span>B2</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input  type='radio' name='aufgabe2' />
		<span>B3</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='radio' name='aufgabe2' />
		<span class='solution'>nicht eindeutig</span>
	</label>
" );


// Aufgabennstellung
$tpl->assign( "beispiel", "Die Elefanten fanden die Kekse. Sie fraßen sie. 
Die Kinder fanden die Kekse. Sie aßen sie." );
$tpl->assign( "beispielVerstecken", "hidden" );


// Funktion zur Validierung
$tpl->assign( "ValidateFunction", "radioVal()" );

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