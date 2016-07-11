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
$tpl->assign( "module_headline", "Funktionen in SQL" );

// Text
$tpl->assign( "text", "Möchten Sie die auszuwählenden Tupel aggregieren, stehen Ihnen die Funktionen
<ul>
<li><code>MIN</code> (kleinsten Wert auswählen),</li>
<li><code>MAX</code> (größten Wert auswählen),</li>
<li><code>AVG</code> (Durchschnittswert errechnen),</li>
<li><code>SUM</code> (alle Werte aufaddieren) und</li>
<li><code>COUNT</code> (Anzahl der gefundenen Tupel zählen)</li>
</ul>
<p>zur Verfügung.</p>
<p>Die <code>SELECT</code>-Anweisung</p><p><code>SELECT MIN (MatrNr) FROM Studierende;</code></p><p>gibt den 
Studierenden mit der niedrigsten Matrikelnummer aus.</p>");

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