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
$tpl->assign( "module_headline", "Beispiel zur Relevanz" );

// Text
$tpl->assign( "text", "Sie suchen wissenschaftliche Untersuchungen zum Thema 'Schäden durch Passivrauchen' und geben 'Schaeden' und 'Passivrauchen' als 
Suchbegriffe in eine Internet-Suchmaschine ein. 
Anhand des hier gezeigten Ergebnisses können Sie sehen, wie unterschiedlich relevant die gefundenen Dokumente für Ihr Informationsproblem sein können.

<iframe src='https://google.de' width='100%' height='350px'></iframe>
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>