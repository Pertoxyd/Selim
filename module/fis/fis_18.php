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
$tpl->assign( "module_headline", "Einsatzbereiche" );

// Text
$tpl->assign( "text", "Folgende Grafik zeigt an unserem Universitätsbeispiel in welchen Bereichen SQL eingesetzt 
werden kann:<br/><br/>
<img class='img-responsive center-block' src='../../images/fis/sql-Einsatz.jpg' alt='Einsatzbereiche von SQL'>
<p>Das <strong>Datenmodell</strong> wird mit Hilfe der <strong>DDL</strong> in eine Datenbank umgesetzt.<br/> 
Die Nutzung der Datenbank erfolgt über die <strong>DML</strong>, mit der z.B. Statistiken erstellt werden.</p>");

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