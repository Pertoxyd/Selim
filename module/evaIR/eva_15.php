<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_bereich.tpl");

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
$tpl->assign( "module_headline", "Recall und Precision" );

// Text
$tpl->assign( "text", "Gib bitte den Wertebereich des recall und der precision an:" );
// Richtige Lösungen
$tpl->assign( "loesung1", "0");
$tpl->assign( "loesung2", "1");
$tpl->assign( "loesung3", "0");
$tpl->assign( "loesung4", "1");

// Placeholderattribute für inputs
$tpl->assign( "placeholder1", "r-Werte von");
$tpl->assign( "placeholder2", "bis...");
$tpl->assign( "placeholder3", "p-Werte von");
$tpl->assign( "placeholder4", "bis...");


// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "input_Korrektur()");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Setze die Werte ein für den Fall, dass das System keine relevanten/alle relevanten Dokumente bzw. keine relevanten/nur relevante Dokumente findet.
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>