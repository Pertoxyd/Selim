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
$tpl->assign( "text", "<p>Ein wichtiger Teil des weltweit zur Verfügung stehenden Informationsangebots kann durch den 
Zugriff auf Datenbanken, der Schlüsseltechnologie von Fakteninformationssystemen, erschlossen werden.</p><p>Daher ist es
 wichtig, Einblick in die Funktionsweise und den Aufbau von Datenbanken zu erlangen, um gezielt Informationen gewinnen 
 zu können. Für den erfolgreichen Einsatz eines Informationssystems in der Praxis ist es von großer Bedeutung, dass es 
 zunächst gelingt, das gegebene Informationsproblem in einem Datenmodell abzubilden, welches anschließend in eine 
 Datenbank überführt wird.</p><p>In diesem Lernsystem werden Grundkenntnisse im Bereich der Datenmodellierung und im 
 Umgang mit Datenbanken mit SQL vermittelt, die eine Voraussetzung für einen sicheren Umgang mit 
 Fakteninformationssystemen sind.</p>" );

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