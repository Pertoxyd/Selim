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
$tpl->assign( "website_title", "Weaver-Memorandum" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Weaver-Memorandum" );

// Bildpfad
$tpl->assign( "image_path", "../../images/mue/Jahrmarkt-Bild-1.png" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "Das Fachgebiet der MÜ entstand Anfang der 50er Jahre. Wegweisend war das sogenannte Weaver-Memorandum (1949), das die Möglichkeit der Übersetzung von Sprache durch den Computer propagierte, indem es den Übersetzungsprozess mit einer Art „Decodieren“ gleichsetzte.
<br />
<br />
<blockquote>
<b>„I have a text in front of me which is written in Russian but I am going to pretend that it is really written in English and that it has 
been coded in some strange symbols. All I need to do is strip off the code in order to retrieve the information contained in the text.”</b>
<footer>Weaver-Memorandum (1949)</footer>
</blockquote>
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