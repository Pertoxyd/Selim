<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_image_text.tpl");

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
$tpl->assign( "module_headline", "Begriffszusammenhänge" );

// Bildpfad
$tpl->assign( "image_path", "../../images/fis/begriffsstruktur_gross.jpg" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Begriffsstruktur" );
// Text
$tpl->assign( "text", "
Die Grafik stellt die Zusammenhänge zwischen den Themenbereichen dieses Lernsystems dar.
Die Basis von Fakteninformationssystemen bilden Datenbanken. Um Informationen in Datenbanken verwalten zu können,
muss zunächst ein 'Datenbauplan' als Implementierungsgrundlage erstellt werden. Dies geschieht mit den Instrumenten der 
<b>Datenmodellierung</b>.<br/> Der Zugriff auf die Daten einer 
Datenbank erfolgt mit der Datenbanksprache <b>SQL</b>. Alle wesentlichen Aktionen in einer Datenbank, wie Daten und Tabellen 
erzeugen, löschen, verändern oder abfragen, können mittels SQL durchgeführt werden.
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