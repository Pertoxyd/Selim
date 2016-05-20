<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_fazit.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ Ende" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Fazit" );

// Text
$tpl->assign( "text", "
Man kann nicht behaupten, dass man die inhaltlichen Probleme der MÜ („Übersetzungsschwierigkeiten“) in den letzten Jahren besser in den Griff bekommen hat. 
Trotz allem ist der Einsatz von MÜ- bzw. CAT-Systemen deutlich gestiegen.
Die Entwicklung geht allerdings eher hin zu „computergestützter Übersetzung“ und weg von der Auffassung, dass MÜ perfekt sein kann. Man versucht, 
die Stärken des Computers und des Menschen zu verbinden, indem man gleichartige, sich wiederholende Abläufe von einer lernfähigen 
Software erledigen lässt, während der Mensch an den nötigen Stellen die Interpretationsarbeit verrichtet.
" );

// E-Mail-Adresse, an die Feedback geschickt werden soll
$tpl->assign( "emailadress", "test@test.de");

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