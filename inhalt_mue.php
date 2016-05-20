<?php
include("Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/inhalt.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Inhaltsverzeichnis" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Inhaltsverzeichnis: Maschinelle Übersetzung" );



// Und die Seite anzeigen
$tpl->display();
?>