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
$tpl->assign( "website_title", "Flaute" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );

// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Flaute" );

// Bildpfad
$tpl->assign( "image_path", "../../images/mue/Jahrmarkt-Bild-4.png" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "
Der ALPAC-Report brachte eine <b>herbe Ernüchterung</b> und hatte beträchtliche Konsequenzen für die weitere Forschung und Entwicklung in der MÜ:
<br />
<br />
<ul>
<li><p>Einstellung der meisten amerikanischen Projekte</p></li>
<li><p>Kommerzialisierung früherer Entwicklungen (60er Jahre) 
<span class='glyphicon glyphicon-arrow-right' aria-hidden='true'></span> SYSTRAN, LOGOS</p></li>
<li><p>Verlagerung des geographischen Schwerpunkts der MÜ-Forschung von den USA nach Europa</p></li>
<li><p><b>Verwerfung der „Fully automatic High Quality Translation“ als oberstes Ziel</b></p></li>
</ul>
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