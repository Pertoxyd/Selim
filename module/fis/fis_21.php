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
$tpl->assign( "module_headline", "INSERT" );

// Text
$tpl->assign( "text", "Mit der Anweisung <code>INSERT</code> werden ein oder mehrere neue Tupel (Zeilen) in eine 
Tabelle eingefügt. Die Syntax dieses Befehls lautet wie folgt:
<p><code>INSERT INTO Tabellenname [(Spaltenname1, ...)] VALUES ('Wert1', ...);</code></p><br/>
<p>Der Befehl</p>
<p><code>INSERT INTO Studierende VALUES (185579, 'Maria', 'Moreno', 'Stuttgart', 12.06.80, 'IKÜ');</code></p><p>fügt 
den Datensatz eines neuen Studierenden in die Tabelle 'Studierende' ein.</p>");

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