<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext.tpl");

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
$tpl->assign( "module_headline", "Aufgabe 3" );

// Aufgabenstellung und Erklärungstext
$tpl->assign( "infoText", "Welche Primärschlüssel eignen sich für die Entitytypen?
<p><img src='../../images/fis/prims.jpg' class='img-responsive center-block'></p>" );

// Text
$tpl->assign( "text", "Formulieren Sie Ihre Überlegungen!" );
$tpl->assign( "text2", "" );
// Richtige Lösungen
$tpl->assign( "loesung1", "<span class='h2'>Entität 'Videofilm'</span><br/><br/>Zweiteiliger Primärschlüssel 'Titel'
und 'Regisseur'. Der 'Titel' identifiziert einen Videofilm nicht eindeutig, da es durchaus Filme mit gleichem Titel gibt.<br/>
oder<br/>Zusätzliches Attribut als Primärschlüssel einfügen, sodass kein zweiteiliger Schlüssel verwendet werden muss.
Zum Beispiel Attribut 'FilmNr'.<br/><br/><span class='h2'>Entität 'Ausleiher'</span><br/><br/>Das Attribut 
'Mitgliedsnummer' identifiziert als einziges einen Ausleiher eindeutig.<br/><br/><span class='h2'>Entität 'Strafen'</span>
<br/><br/>Das Attribut 'RegNr' eignet sich als Primärschlüssel, da es die Entität eindeutig bestimmt.");
$tpl->assign( "loesung2", "");



// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "toggleAnswer()");

$tpl->assign("hideBlock", "hidden");
$tpl->assign("hideBlock1", "hidden");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Wenn Ihnen die Attribute nicht als Primärschlüssel geeignet erscheinen, können Sie sie auch kombinieren oder sich 
weitere Attribute überlegen sowie deren Einsatz begründen!" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>