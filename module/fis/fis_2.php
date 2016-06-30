<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_tabelle_drag_drop.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Wichtige Begriffe" );

//Aufgabenbeschreibung
$tpl->assign( "description", "Ziehe die Erklärungen auf der rechten Seite in die entsprechenden freien Felder.
<p>Halte dein Telefon bitte <strong>quer</strong>, da die Aufgabe so besser zu benutzten ist.</p>" );

//Tabellenüberschriften
$tpl->assign( "tableHeading1", "Begriff" );
$tpl->assign( "tableHeading2", "Erklärung" );

//Begriffe
$tpl->assign( "tableTerm1", "Datenmodellierung" );
$tpl->assign( "tableTerm2", "ERM" );
$tpl->assign( "tableTerm3", "Entität" );
$tpl->assign( "tableTerm4", "Relationenmodell" );
$tpl->assign( "tableTerm5", "Selektion" );
$tpl->assign( "tableTerm6", "Projektion" );
$tpl->assign( "tableTerm7", "Join" );
$tpl->assign( "tableTerm8", "SQL" );

//Erklärungen
$tpl->assign( "tableDefinition1", "Auswahl von Spalten einer Tabelle und Unterdrückung der Information der nicht gewünschten Spalten" );
$tpl->assign( "tableDefinition2", "Grundlage relationaler Datenbanken" );
$tpl->assign( "tableDefinition3", "Auswahl von Zeilen einer Tabelle, die eine vorgegebene Bedingung erfüllen" );
$tpl->assign( "tableDefinition4", "Verknüpfung mehrerer Tabellen" );
$tpl->assign( "tableDefinition5", "ermöglicht den Zugriff auf die Daten einer relationalen Datenbank" );
$tpl->assign( "tableDefinition6", "ist ein konzeptionellen Datenmodell" );
$tpl->assign( "tableDefinition7", "dient der formalen Beschreibung von Daten" );
$tpl->assign( "tableDefinition8", "eigenständige Einheit, die im betrachteten Modell eindeutig identifiziert werden kann" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>