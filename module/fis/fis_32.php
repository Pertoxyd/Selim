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
$tpl->assign( "module_headline", "Einfache Selektion" );

// Text
$tpl->assign( "text", "Werden nur Teile einer Tabelle benötigt, so werden diese explizit anstatt des Platzhalters * 
angegeben. Die vereinfachte Syntax für die <code>SELECT</code>-Anweisung lautet dann:
<p><code>SELECT &lt;Spaltenname&gt; FROM &lt;Tabellenname&gt;;</code></p><br/>
<p>Der Befehl</p>
<p><code>SELECT Nachname, Vorname FROM Studierende;</code></p><p>gibt die Namen aller Studierenden in der Datenbank aus.
</p>");

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