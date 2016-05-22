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
$tpl->assign( "image_path", "../../images/fis/datenmodell.jpg" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Datenmodell" );
// Text
$tpl->assign( "text", "
Das Ziel der Datenmodellierung ist eine systematische, strukturierte Erfassung und Dokumentation von Informationen, 
um so eine korrekte Entwurfsbasis zur Implementierung einer Datenbank zu erhalten.<br/><br/>
Das Datenmodell ist ein Instrument zur Durchführung des Modellierungsprozesses. Mit seiner Hilfe sollen die relevanten 
Informationen abgebildet, und die Struktur der anfallenden Daten herausgearbeitet und in eine systematische Form 
gebracht werden.<br/><br/>
Das Ergebnis der Datenmodellierung ist das Datenschema, der 'Daten-Bauplan' einer Datenbank in formal-grafischer Form.
<br/><br/>
Man kann zwei verschiedende Arten von Datenmodellen unterscheiden: <b>Konzeptionelle Datenmodelle</b> und 
<b>Logische Datenmodelle</b>.<br/>Konzeptionelle Datenmodelle bilden den zu betrachtenden Realitätsausschnitt 
implementierungsunabhängig ab, d.h. es wird nicht festgelegt mit welcher Programmiersprache die Datenbank umgesetzt 
werden muss bzw. welche Datenbankart aus der Implementierung resultiert.<br/><br/>
Logische Datenmodelle sind auf einen bestimmten Datenbanktyp, wie z.B. objektorientiert, hin ausgerichtet. Die daraus 
resultierenden Datenschemata sind dementsprechend implementierungsabhängig. Ein Beispiel für ein logisches Datenmodell 
ist das Relationenmodell, mit dessen Hilfe eine relationale Datenbank definiert wird.<br/><br/>
Die Abhängigkeit der Schemata kann man folgendermaßen darstellen:
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