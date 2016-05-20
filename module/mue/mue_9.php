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
$tpl->assign( "module_headline", "Probleme der Maschinellen Übersetzung" );

// Text
$tpl->assign( "text", "Obwohl Maschinelle Übersetzung schon in vielen Bereichen erstaunlich viel leistet, gibt es Bereiche, in denen noch Verbesserungsbedarf besteht. Während für die Menschen der Umgang mit Sprache ganz natürlich ist, steht Software, die dasselbe leisten soll wie ein Mensch, vor ungeheuren Problemen. Eine Maschine, die ihre Arbeitsprozesse auf Einsen und Nullen basiert, kann nicht ohne weiteres mit der fast unerschöpflichen Vielfalt der menschlichen Sprache umgehen.
Die folgenden Aufgaben werden Dir zeigen, worin die Probleme unter anderem bestehen können." );

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