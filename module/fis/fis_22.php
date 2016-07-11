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
$tpl->assign( "module_headline", "UPDATE" );

// Text
$tpl->assign( "text", "Wenn Sie die Werte ein oder mehrerer Zeilen einer Datenbank verändern wollen, müssen Sie die 
<code>UPDATE</code>-Anweisung verwenden. Die Syntax des <code>UPDATE</code>-Befehls lautet:
<p><code>UPDATE Tabellenname SET Spaltenname = Ausdruck [WHERE Bedingung];</code></p><br/>
<p>Dabei wird in der <code>WHERE</code>-Klausel festgelegt, welche Zeilen von der Änderung betroffen sein sollen. Ohne 
eine solche Angabe werden alle Zeilen der Tabelle geändert.</p>
<p>Der Befehl</p>
<p><code>UPDATE Studierende SET Heimatort = 'München' WHERE Nachname = 'Sanchez';</code></p><p>ändert den Heimatort des 
Studierenden Sanchez in München.</p>");

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