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
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - Fakteninformationssysteme" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Inhaltsverzeichnis: Fakteninformationssysteme" );

$tpl->assign( "text", "");


include("inhalt.php");
include("kapitelnamen.php");
include("../../functions/page_navigation.inc.php");
include("../../functions/contents.inc.php");

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "" );
$tpl->assign( "iwisTipp", "" );

// Und die Seite anzeigen
$tpl->display();
?>