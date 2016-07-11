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
$tpl->assign( "module_headline", "Die WHERE-Klausel" );

// Text
$tpl->assign( "text", "Normalerweise rufen Sie nicht alle Zeilen einer Tabelle ab, besonders dann nicht, wenn die 
Tabelle aus vielen Zeilen besteht. In der <code>WHERE</code>-Klausel können Sie die zum Abrufen von Datensätzen zu 
verwendenden Kriterien festlegen.
<p><code>SELECT &lt;Spaltenname&gt; FROM &lt;Tabellenname&gt; [WHERE &lt;Bedignung&gt;];</code></p><br/>
<p>Wenn Sie zum Beispiel eine Namensliste aller Studierenden des Studiengangs 'Lehramt' haben möchten, würden Sie 
folgende SQL-Anweisung eingeben:</p>
<p><code>SELECT Nachname, Vorname FROM Studierende WHERE Studiengang = 'Lehramt';</code></p>");

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