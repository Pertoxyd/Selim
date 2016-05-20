<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_image_text.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Wiederaufschwung" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Wiederaufschwung" );

// Bildpfad
$tpl->assign( "image_path", "../../images/mue/Jahrmarkt-Bild-5.png" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "
<ul>
	<li><p>Weiterentwicklung der kommerziellen Übersetzungssysteme</p></li>
	<li><p>EUROTRA-Projekt der EG (1982-1994) mit Beteiligung von Forschergruppen aus 9 Ländern: Bearbeitung von 72 Sprachenpaaren 
		(<span class='glyphicon glyphicon-arrow-right' aria-hidden='true'></span> erhebliche Erweiterung der „computerlinguistischen Kompetenz“ innerhalb der beteiligten Länder) </p></li>
	<li><p>Beginn der Förderung der MÜ durch die japanische Regierung und die japanische Industrie</p></li>
	<li><p>Beginn der Integration gesprochener Sprache: Entwicklung von Dolmetschsystemen<p></li>
</ul>
" );

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "" );
$tpl->assign( "iwisTipp", "" );

// Muss für die Seitennavigationsfunktion eingebaut werden (die Pfeile)
include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>