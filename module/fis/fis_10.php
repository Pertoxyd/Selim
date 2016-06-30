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
$tpl->assign( "module_headline", "Aufgabenbeschreibung Aufgabe 1" );

// Text
$tpl->assign( "text", "In dieser Aufgabe sollen Sie die bisher vermittelten Lehrinhalte anwenden und nun einmal 
selbständig modellieren!<br/>Die Vorgehensweise sieht dabei folgendermaßen aus:
<p>
Sie werden:
<ul>
<li>aus einem Beschreibungstext die benötigten Objekttypen heraussuchen</li>
<li>die Kardinalitäten zwischen den Objekttypen bestimmen und</li>
<li>die Primärschlüssel der Objekttypen festlegen.</li>
</ul></p>
<p><strong>Aufgabenstellung:</strong><br/>Eine Bibliothek soll um eine Mediothek erweitert werden und benötigt ein 
Informationssystem für den Verleih von Videofilmen. Mit diesem sollen Informationen über Verleih und Vormerkungen der 
Videofilme verwaltet werden. Des Weiteren besteht die Möglichkeit Strafen für verspätete Rückgaben zu verlangen.</p>" );

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