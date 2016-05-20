<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_drag_drop.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "SELiM - Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Übersetzungsverfahren: Übung 4" );

// Text
$tpl->assign( "text", "	
Ordne die folgenden Erklärungen den Arbeitsschritten zu.
" );

// Zuordnungsüberschrift
$tpl->assign( "DRagDropHeadline1", "Analyse");
$tpl->assign( "DRagDropHeadline2", "Transfer");
$tpl->assign( "DRagDropHeadline3", "Synthese");
$tpl->assign( "DRagDropHeadline4", "");
$tpl->assign( "DRagDropHeadline5", "");
$tpl->assign( "DRagDropHeadline6", "");	
$tpl->assign( "DRagDropHeadline7", "");
$tpl->assign( "DRagDropHeadline8", "");				
// Die auswählbaren Optionen
$tpl->assign( "Option1", "Die ZP des quellsprachlichen textes wird in eine ZP des zeilsprachlichen Textes überführt.");
$tpl->assign( "Option2", "Generierung der zeilsprachlichen ZP in einen zielsprachlichen Text.");
$tpl->assign( "Option3", "Der quellsprachliche Text wird analysiert. Es wird eine Zwischenrepräsentation (ZP) des quellsprachlichen Textes erstellt.");
$tpl->assign( "Option4", "");
$tpl->assign( "Option5", "");
$tpl->assign( "Option6", "");
$tpl->assign( "Option7", "");
$tpl->assign( "Option8", "");		

// Values setzen, für die richtige Reigenfolge, was eben richtig ist
// Value 1 = richtige Antwort
// alles andere ist egal
// Select 1
$tpl->assign( "Option1Value", "3");
$tpl->assign( "Option2Value", "2");
$tpl->assign( "Option3Value", "1"); //richtige Antwort
$tpl->assign( "Option4Value", "5");
$tpl->assign( "Option5Value", "5");
$tpl->assign( "Option6Value", "5");
$tpl->assign( "Option7Value", "5");
$tpl->assign( "Option8Value", "5");
//Select 2
$tpl->assign( "2Option1Value", "1");
$tpl->assign( "2Option2Value", "2");
$tpl->assign( "2Option3Value", "3");
$tpl->assign( "2Option4Value", "4");
$tpl->assign( "2Option5Value", "4");
$tpl->assign( "2Option6Value", "4");
$tpl->assign( "2Option7Value", "4");
$tpl->assign( "2Option8Value", "4");
//Select 3
$tpl->assign( "3Option1Value", "2");
$tpl->assign( "3Option2Value", "1");
$tpl->assign( "3Option3Value", "3");
$tpl->assign( "3Option4Value", "5");
$tpl->assign( "3Option5Value", "6");
$tpl->assign( "3Option6Value", "9");
$tpl->assign( "3Option7Value", "7");
$tpl->assign( "3Option8Value", "8");
//Select 4
$tpl->assign( "4Option1Value", "8");
$tpl->assign( "4Option2Value", "8");
$tpl->assign( "4Option3Value", "4");
$tpl->assign( "4Option4Value", "8");
$tpl->assign( "4Option5Value", "6");
$tpl->assign( "4Option6Value", "5");
$tpl->assign( "4Option7Value", "7");
$tpl->assign( "4Option8Value", "8");
// Select 5
$tpl->assign( "5Option1Value", "8");
$tpl->assign( "5Option2Value", "2");
$tpl->assign( "5Option3Value", "1");
$tpl->assign( "5Option4Value", "4");
$tpl->assign( "5Option5Value", "5");
$tpl->assign( "5Option6Value", "6");
$tpl->assign( "5Option7Value", "7");
$tpl->assign( "5Option8Value", "8");
// Select 6
$tpl->assign( "6Option1Value", "2");
$tpl->assign( "6Option2Value", "3");
$tpl->assign( "6Option3Value", "4");
$tpl->assign( "6Option4Value", "7");
$tpl->assign( "6Option5Value", "5");
$tpl->assign( "6Option6Value", "6");
$tpl->assign( "6Option7Value", "1");
$tpl->assign( "6Option8Value", "8");
//Select 7
$tpl->assign( "7Option1Value", "1");
$tpl->assign( "7Option2Value", "3");
$tpl->assign( "7Option3Value", "2"); 
$tpl->assign( "7Option4Value", "4");
$tpl->assign( "7Option5Value", "5");
$tpl->assign( "7Option6Value", "6");
$tpl->assign( "7Option7Value", "7");
$tpl->assign( "7Option8Value", "8");
// Select 8
$tpl->assign( "8Option1Value", "2");
$tpl->assign( "8Option2Value", "1");
$tpl->assign( "8Option3Value", "3"); 
$tpl->assign( "8Option4Value", "4");
$tpl->assign( "8Option5Value", "5");
$tpl->assign( "8Option6Value", "6");
$tpl->assign( "8Option7Value", "7");
$tpl->assign( "8Option8Value", "8");

// Mögichkeit bis zu 2 Selects auszublenden, Drag Drop muss als 6-8 Paare haben
// hidden oder invisible oder beides
$tpl->assign( "hideOption4", "hidden");
$tpl->assign( "hideOption5", "hidden");
$tpl->assign( "hideOption6", "hidden");
$tpl->assign( "hideOption7", "hidden");
$tpl->assign( "hideOption8", "hidden");

// Validierungsfunktion
$tpl->assign("btn-check", "checkSelects()");


include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>