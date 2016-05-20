<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/contents.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Inhaltsverzeichnis" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Inhaltsverzeichnis: Maschinelle Übersetzung" );

$tpl->assign( "text", "");


include("inhalt.php");
include("kapitelnamen.php");
include("../../functions/page_navigation.inc.php");
include("../../functions/contents.inc.php");

// Und die Seite anzeigen
$tpl->display();
?>