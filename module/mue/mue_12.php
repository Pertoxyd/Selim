<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_single_choice.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ: Probleme: Übung 3" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Probleme: Übung 3" );

// Text
$tpl->assign( "text", "Wähle die richtige Aussage aus. <br /> <br />Um an dieser Stelle richtig zu übersetzen muss das System" );

// Single Choice Optionen
// Pro Option muss ein Radiobutton nach folgendem Schema eingefügt werden:
$tpl->assign( "single_choice", "
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe'/>
		<span>Ein spezielles Wörterbuch für die Tierwelt bereithalten.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe' />
		<span>Die Vergangenheitsformen der Verben erkennen.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='radio' name='aufgabe'	/>
		<span class='solution'>Satzübergreifend analysieren.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe' />
		<span>Besonders \"sicher sein im Umgang mit Pronomen\".</span>
	</label>
" );


// Aufgabennstellung
$tpl->assign( "beispiel", "Die Elefanten fanden die Kekse. Sie fraßen sie. 
Die Kinder fanden die Kekse. Sie aßen sie." );

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