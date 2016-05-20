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
$tpl->assign( "website_title", "Alpac-Report" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Alpac-Report" );

// Bildpfad
$tpl->assign( "image_path", "../../images/mue/Jahrmarkt-Bild-3.png" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "Der ALPAC-Report (1966), ein Bericht des Automatic Language Processing Advisory Committee, der MÜ-Systeme nach
<ul>
	<li><p>Qualität</p></li>
	<li><p>Kosten</p></li>
	<li><p>Entwicklungsaussichten und</p></li>
	<li><p>Nachfrage nach Übersetzungen</p></li>
</ul>
<p>evaluierte, kam zu folgendem Schluss:</p>
<blockquote>
	<b>„Es gibt keine funktionierende maschinelle Übersetzung und wird sie wohl auch nie geben!“</b>
	<footer>ALPAC-Report (1966)</footer>
</blockquote>

<p>Weiterhin wurde angesichts der hohen Kosten und geringen Effizienz der Bedarf an MÜ-Systemen überhaupt in Frage gestellt.</p>
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