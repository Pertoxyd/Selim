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
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Wichtige Begriffe" );

// Text
$tpl->assign( "text", "Wähle für die verschiedenen Evaluierer die richtigen Interessen aus." );

// Zuordnungsüberschrift
$tpl->assign( "DRagDropHeadline1", "Relevanz");
$tpl->assign( "DRagDropHeadline2", "Recall");
$tpl->assign( "DRagDropHeadline3", "Precision");
$tpl->assign( "DRagDropHeadline4", "e-Maß");
$tpl->assign( "DRagDropHeadline5", "Benutzerstandpunkt");
$tpl->assign( "DRagDropHeadline6", "Koordination");	
$tpl->assign( "DRagDropHeadline7", "Elementarparameter");
$tpl->assign( "DRagDropHeadline8", "Standardmaße");				
// Die auswählbaren Optionen
$tpl->assign( "Option1", "zur Berechnung der Standardmaße");
$tpl->assign( "Option2", "Recall und Precision");
$tpl->assign( "Option3", "Relativiert die Aussage der Standardmaße");
$tpl->assign( "Option4", "Vereint die Standardmaße zu einem Ausdruck");
$tpl->assign( "Option5", "Ist das Verhältnis der Anzahl der gefundenen relevanten zu allen relevanten Dokumenten");
$tpl->assign( "Option6", "Ist das Verhältnis der Anzahl der relevanten gefundenen zu allen gefundenen Dokumenten");
$tpl->assign( "Option7", "Vereint die Standardmaße zu einer Maßzahl");
$tpl->assign( "Option8", "Ist die Bedeutung eines Dokuments für die Lösung eines Informationsproblems");		

// Values setzen, für die richtige Reigenfolge, was eben richtig ist
// Value 1 = richtige Antwort
// alles andere ist egal
// Select 1
$tpl->assign( "Option1Value", "2");
$tpl->assign( "Option2Value", "3");
$tpl->assign( "Option3Value", "8"); //richtige Antwort
$tpl->assign( "Option4Value", "4");
$tpl->assign( "Option5Value", "5");
$tpl->assign( "Option6Value", "6");
$tpl->assign( "Option7Value", "7");
$tpl->assign( "Option8Value", "1");
//Select 2
$tpl->assign( "2Option1Value", "2");
$tpl->assign( "2Option2Value", "5");
$tpl->assign( "2Option3Value", "3");
$tpl->assign( "2Option4Value", "4");
$tpl->assign( "2Option5Value", "1");
$tpl->assign( "2Option6Value", "6");
$tpl->assign( "2Option7Value", "7");
$tpl->assign( "2Option8Value", "8");
//Select 3
$tpl->assign( "3Option1Value", "2");
$tpl->assign( "3Option2Value", "3");
$tpl->assign( "3Option3Value", "4");
$tpl->assign( "3Option4Value", "5");
$tpl->assign( "3Option5Value", "6");
$tpl->assign( "3Option6Value", "1");
$tpl->assign( "3Option7Value", "7");
$tpl->assign( "3Option8Value", "8");
//Select 4
$tpl->assign( "4Option1Value", "2");
$tpl->assign( "4Option2Value", "3");
$tpl->assign( "4Option3Value", "4");
$tpl->assign( "4Option4Value", "1");
$tpl->assign( "4Option5Value", "6");
$tpl->assign( "4Option6Value", "5");
$tpl->assign( "4Option7Value", "7");
$tpl->assign( "4Option8Value", "8");
// Select 5
$tpl->assign( "5Option1Value", "3");
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
$tpl->assign( "hideOption7", "");
$tpl->assign( "hideOption8", "");

// Validierungsfunktion
$tpl->assign("btn-check", "checkSelects()");

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