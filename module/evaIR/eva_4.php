<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Allgemeine Kriterien" );

// Text
$tpl->assign( "text", "IR-Systeme bzw. Komponenten von IR-Systemen können nach verschiedenen Kriterien beurteilt werden: <br />

<b>Effizienz:</b> Hierbei handelt es sich um Fragen hinsichtlich des notwendigen Speicherplatzes, der Anzahl an Ein- und Ausgabeoperationen 
oder den Antwortzeiten, die möglichst gering gehalten werden sollten. Diese Punkte können bei genügend genauer Analyse der verwendeten Algorithmen 
weitgehend analytisch und durch Benchmarktests geklärt werden.<br />
<b>Effektivität:</b> Interessant ist in diesem Zusammenhang die Qualität des mit möglichst wenig Aufwand an Zeit und Anstrengung erzielten Ergebnisses. Zentral ist hier der Begriff der Relevanz der Ergebnisse hinsichtlich einer gegebenen Anfrage. Da in die Definition der Effektivität häufig auch noch der Informationsbedarf des Benutzers einbezogen wird, ist diese Frage weitgehend nur empirisch zu beantworten.

<h2>Weitere Bewertungskriterien können sein:</h2>
<p>
<b>Bedienfreundlichkeit: </b>Hier geht es in erster Linie um die Benutzeroberfläche, die dem Informationssuchenden einen möglichst problemlosen Zugriff 
auf die Dokumente ermöglichen soll. Interessant ist hierbei auch die Frage nach der Art der Interaktion (direktmanipulativ, menügesteuert, natürlichsprachlich) 
bzw. dem Modus (gesprochen - geschrieben).<br />
<b>Anfragesprache: </b>Die Anfrage kann in natürlicher Sprache, in einer formalen Sprache, einsprachig oder mehrsprachig erfolgen und setzt dabei evtl. entsprechende Vorkenntnisse beim Benutzer voraus.
<b>Qualität der Datenbasis: </b>Aktualität, Umfang
</p>
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