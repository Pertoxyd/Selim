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
$tpl->assign( "module_headline", "Übersetzungsverfahren: Übung 6" );

// Text
$tpl->assign( "text", "Wähle aus, welche Aspekte auf den Wort-für-Wort-Ansatz zutreffen:" );

// Multiple Choice Optionen
// Pro Option muss ein Radiobutton nach folgendem Schema eingefügt werden:
$tpl->assign( "single_choice", "
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Dieser Ansatz ist sinnvoll, wenn nur von einer bestimmten Sprache in eine bestimmte Sprache übersetzt werden soll.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Man benötigt ein großes zweisprachiges Lexikon mit Wörtern und Phrasen.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='checkbox' />
		<span class='solution'>Bei der Übersetzung ist die Produktion von ungrammatischen Sätzen sehr hoch.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='checkbox' />
		<span>Dieser Ansatz ist besonders geeignet für Übersetzungen zwischen Sprachen, die in Vokabular und Grammatik sehr unterschiedlich aufgebaut sind.</span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='checkbox' />
		<span>Man benötigt ein großes viersprachiges Lexikon.</span>
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