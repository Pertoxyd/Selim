<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "e-Maß" );

// Aufgabenstellung und Erklärungstext
$tpl->assign( "infoText", "" );

// Text
$tpl->assign( "text", "Wann ist ein Wert von e 'gut'?" );
$tpl->assign( "text2", "" );
// Richtige Lösungen
$tpl->assign( "loesung1", "Je niedriger der Wert von e, desto besser ist das System.");
$tpl->assign( "loesung2", "");

// Block zwei verstecken
$tpl->assign( "hideBlock", "hidden");
$tpl->assign("hideBlock1", "hidden");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Setze sehr hohe und sehr niedrige Werte für recall und precision in die Formel ein! Da bspw. hohe recall- und 
precision-Werte gut sind, lassen sich entsprechende Schlüsse auf e ziehen.
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>