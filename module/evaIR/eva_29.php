<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_fazit.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Fazit" );

// Text
$tpl->assign( "text", "
Du hast auf den vorhergehenden Seiten kennengelernt, wie man IR-Systeme bewerten und miteinander vergleichen kann. 
Zu den wichtigsten Begriffen und Konzepten gehören in diesem Zusammenhang Relevanz, recall, precision und e-Maß. 
Darüberhinaus hast du erfahren, mit welchen Problemen dieses Vorgehen behaftet sein kann und dass die Anwendung 'objektiver' Maße auch 
kritisch zu bewerten ist, da es subjektive Faktoren gibt (z.B. Benutzerstandpunkt, Relevanz), die die Messergebnisse wieder relativieren.
" );

// E-Mail-Adresse, an die Feedback geschickt werden soll
$tpl->assign( "emailadress", "test@test.de");


include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>