<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Einordnung des Themas" );

// Text
$tpl->assign( "text", "Die Methoden der Inhaltserschliessung und der Wiedergewinnung von Dokumenten können zwischen verschiedenen IR-Systemen sehr 
stark variieren. Dementsprechend können auch die Ergebnisse, die einzelne Systeme liefern, sehr unterschiedlich ausfallen. Daher erscheint es notwendig, 
Verfahren zu entwickeln, die die Qualität von Retrievalergebnissen messen und damit auch einen Vergleich verschiedener Systeme ermöglichen, um damit bspw. 
Kaufentscheidungen zu erleichtern. Zur Bestimmung der Qualität eines Retrievalergebnisses existieren zwei wichtige Größen, die zum einen beschreiben, wie 
umfassend das Ergebnis ist, und zum anderen aufzeigen, wieviel 'Ballast' ein Ergebnis enthält. Diese beiden Elemente können zusammen den Ausgangspunkt 
für den Vergleich zweier Systeme bilden." );

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