<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Historie" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Evaluierung von MÜ-Systemen" );

// Text
$tpl->assign( "text", "Der ALPAC-Report hat gezeigt, dass es das perfekte MÜ-System wahrscheinlich nie geben wird. 
Dennoch können MÜ-Systeme dem Menschen die Arbeit bedeutend erleichtern. 
Bei der Evaluierung oder Auswahl eines MÜ-Systems kann man verschiedene Faktoren wie Übersetzungsgeschwindigkeit, Kosten, Übersetzungsqualität 
berücksichtigen. Welcher letztendlich das größte Gewicht bekommt, hängt vom Evaluierer und seiner Perspektive ab." );

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Der/die eigentliche Tipp/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "" );
$tpl->assign( "iwisTipp", "" );


include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>