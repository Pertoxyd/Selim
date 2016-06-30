<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text_mit_tabelle.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Miniwelt 'Universität'" );

// Text
$tpl->assign( "text", "In diesem Lernsystem soll als einheitliches, durchgängiges Fallbeispiel ein Ausschnitt aus einem 
universitären Informationssystem betrachtet werden. Diese Miniwelt, wie ein zu betrachtender Realitätsausschnitt auch 
genannt wird, soll mit Hilfe der Datenmodellierung in eine Datenbank überführt werden und es soll anschließend mittels 
SQL auf die Daten zugegriffen werden.<p>Die Anforderungen für das Informationssystem der Universität umfassen folgende
Punkte:</p>" );

//Text über Listen
$tpl->assign("textList1", "Information über");
$tpl->assign("textList2", "Beziehung zwischen 'Objekten'");

//Listenpunkte Liste links
$tpl->assign("list1term1", "Studierende");
$tpl->assign("list1term2", "Dozenten");
$tpl->assign("list1term3", "Lehrveranstaltungen");
$tpl->assign("list1term4", "Bücher");

//Listenpunkte Liste rechts
$tpl->assign("list2term1", "Studierende belegen Lehrveranstaltungen");
$tpl->assign("list2term2", "Dozenten bieten Lehrveranstaltungen an");
$tpl->assign("list2term3", "Dozenten empfehlen Bücher");

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