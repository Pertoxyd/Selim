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
$tpl->assign( "module_headline", "Anwendung Boolescher Logik" );

// Text
$tpl->assign( "text", "<img class='img-responsive center-block' src='../../images/fis/tabelle-studierende.jpg'><p>Will 
man beispielsweise eine Namensliste von allen Studierenden ermitteln, deren Matrikelnummer nicht höher als 183000 ist 
und von allen, die 'IIM' studieren, dann gibt man folgende <code>SELECT</code>-Anweisung ein:</p><p><code>SELECT Name, 
Vorname FROM Studierende WHERE NOT (MatrNr > 183000) OR (Studiengang = 'IIM');</code></p><p>Man erhält folgendes Ergebnis:
Hauke Freer, Juliane Thiele und Samuel Sanchez</p>");

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