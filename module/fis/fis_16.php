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
$tpl->assign( "module_headline", "SQL - Grundlagen" );

// Text
$tpl->assign( "text", "SQL (\"Structured Query Language\") ist eine benutzerorientierte Abfragesprache, die alle 
erforderlichen Sprachelemente enthält, um sämtliche Arbeiten, die beim Umgang mit einer relationalen Datenbank anfallen,
auszuführen.<br/>SQL wurde in den 70er Jahren von E.F. Codd konzipiert und 1987 vom Normungsinstitut ISO als Standard 
für Datenbanksprachen eingeführt.<p>Mit SQL ist es möglich folgende Aufgaben auszuführen:
<ul>
<li>eine neue Datenbank aufbauen.</li>
<li>die Struktur einer vorhandenen Datenbank modifizieren.</li>
<li>die Einstellungen der Systemsicherheit ändern.</li>
<li>Benutzerberechtigungen für Datenbanken oder Tabellen einrichten.</li>
<li>den Inhalt einer vorhandenen Datenbank aktualisieren.</li>
<li>eine Datenbank nach Informationen abfragen.</li>
</ul></p><p>Die Bezeichnung SQL sollte man nicht auf die Goldwaage legen. Während das S für Structured (=Strukturiert) 
und L für Language (Sprache) ohne weiteres klar sind, stellt das Q für Query (Abfrage) einen Kompromiss dar. Man könnte 
annehmen, dass sich SQL aussschliesslich auf die Abfrage von Datenbanken bezieht. Es lassen sich aber, wie oben 
dargestellt, nicht nur Abfragen ausführen, sondern auch Tabellen erzeugen, Daten hinzufügen, Daten löschen, Daten 
zusammenführen, Aktionen aufgrund von Änderungen an der Datenbank auslösen und Abfragen innerhalb eines Programms oder 
der Datenbank speichern. Query steht also stellvertretend für eine ganze Reihe von Funktionen.</p>");

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