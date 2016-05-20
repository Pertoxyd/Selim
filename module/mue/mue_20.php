<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Übersetzungsverfahren" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Übersetzungsverfahren" );

// Text
$tpl->assign( "text", "Man kann bei MÜ- Systemen verschiedene Übersetzungsverfahren unterscheiden, nach denen die Systeme arbeiten. 
Um ein geeignetes Verfahren zu finden, ist es wichtig, zu beachten, wie viele Sprachpaare berücksichtigt werden sollen, 
welchem Zweck das System dienen soll, und in welchem Maßen und an welcher Stelle das Eingreifen eines menschlichen Übersetzers vorgesehen ist.
" );

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