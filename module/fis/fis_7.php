<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Entity-Relationship-Modell" );

// Text
$tpl->assign( "text", "Das Grundkonzept des ERM basiert auf:
<ul>
<li>Der <strong>Entität</strong> ('Entity') als zu modellierende Informationseinheit (Objekt), z.B. ein Buch oder die 
Adresse eines Studierenden. Gleichen sich mehrere Entitäten, so werden sie zu einer Entitätsmenge zusammengefasst. Für 
die Objekte einer Entitätsmenge wird ein Objekttyp gebildet, der Entity-Typ, der die Entitäten allgemein beschreibt</li>
<li>Den <strong>Relationen</strong> ('Relationship') zur Modellierung von Beziehungen zwischen Entitäten, z.B. ein 
Dozent hält eine Vorlesung. Gleichen sich mehrere Relationen so werden sie zu einer Relationshipmenge zusammengefasst, 
die durch den Relationship-Typ beschrieben wird.</li>
<li>Den <strong>Attributen</strong> als Eigenschaft einer Entität oder einer Relation, z.B. der Titel einer Vorlesung. 
In einem Entitätstyp existiert immer ein Primärschlüssel , ein Attribut (oder eine Kombination von Attributen), das die 
einzelnen Entitäten eindeutig identifiziert, z.B. die Matrikelnummer eines Studierenden.</li></ul>" );

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