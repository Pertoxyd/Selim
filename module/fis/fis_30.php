<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Die SELECT-Anweisung" );

// Text
$tpl->assign( "text", "Die wichtigste und am häufigsten verwendete SQL-Anweisung ist <code>SELECT</code> mit der 
Informationen aus der Datenbank abgerufen werden können. Mit Hilfe einer <code>SELECT</code>-Anweisung können Sie 
folgendes tun:
<p><strong>Selektion (Auswahl)</strong><br/>Sie können die Selektionsfunktionalität in SQL verwenden, um die Zeilen einer 
Tabelle auszuwählen. Sie wirkt wie ein Filter. Sie können verschiedene Kriterien verwenden, um die angezeigten Zeilen 
selektiv zu beschränken.</p><p><strong>Projektion</strong><br/>Sie können die Projektionsfunktionalität in SQL verwenden, 
um die Spalten in einer Tabelle zu auszuwählen, die Ihre Anfrage zurückgeben soll. Sie können beliebig wenige oder viele
Spalten aus der Relation auswählen.</p><p><strong>Join (Verbund)</strong><br/>Sie können die JOIN-Funktionalität in SQL 
verwenden, um Daten zusammezustellen, die in verschiedenen Tabellen gespeichert sind, indem Sie die beiden Tabellen 
verknüpfen.</p><img class='img-responsive center-block' src='../../images/fis/selektprojekt.jpg'>");

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