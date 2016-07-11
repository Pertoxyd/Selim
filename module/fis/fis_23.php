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
$tpl->assign( "module_headline", "DELETE" );

// Text
$tpl->assign( "text", "Mit Hilfe der <code>DELETE</code>-Anweisung können Sie Daten aus der Datenbank löschen. Die Syntax
des Löschbefehls<code>DELETE</code> lautet:
<p><code>DELETE FROM Tabellenname [WHERE Bedingung];</code></p><br/>
<p>Damit werden aus einer Tabelle alle Zeilen gelöscht, auf die die mit der <code>WHERE</code>-Klausel formulierte 
Bedingung zutrifft. Ohne Argument in der <code>WHERE</code>-Klausel löscht DELETE <strong>alle Zeilen</strong> aus der 
Tabelle!</p>
<p>Die Anweisung</p>
<p><code>DELETE FROM Studierende WHERE Studiengang = 'IIM';</code></p><p>löscht die Datensätze aller IIMler der Tabelle
'Studierende'.</p>");

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