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
$tpl->assign( "website_title", "Zukunftsaussichten" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Zukunftsaussichten" );

// Bildpfad
$tpl->assign( "image_path", "../../images/mue/Jahrmarkt-Bild-7.png" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "
Heute ist maschinelle Übersetzung wichtiger denn je:<br />
<br />
Immer mehr Fachwissen wird weltweit in immer mehr Sprachen zur Verfügung gestellt,
so dass eine Übersetzung der Information in irgendeiner Phase des Informationsprozesses nötig wird.
<br />
<br />
Mit der <b>Globalisierung</b> wächst die <b>wirtschaftliche Zusammenarbeit</b> von Betrieben auf internationaler 
Ebene und damit die <b>Dringlichkeit schneller und kostengünstiger Übersetzungen</b>.
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