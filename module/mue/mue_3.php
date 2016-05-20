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
$tpl->assign( "website_title", "Boomphase" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Boomphase" );

// Bildpfad
$tpl->assign( "image_path", "../../images/mue/Jahrmarkt-Bild-2.png" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "Die Erwartungen waren anfangs sehr hoch. 
<br />
<br />
<b>Erste Forschungsarbeiten konzentrierten sich auf das Sprachenpaar Russisch-Englisch</b>, mit dem Ziel, das in russischen Fachzeitschriften enthaltene Wissen zu erschließen (Georgetown-IBM-Experiment).
<br />
<br />
Während die ersten Systeme noch relativ einfach konzipiert waren und mehr oder weniger auf „Wort-für-Wort-Übersetzungen“ basierten, erkannte man bald die Notwendigkeit einer syntaktischen Analyse.
Dies war jedoch nur ein erster Schritt auf dem Weg zu einer „fully automatic high-quality translation“ (FAHQT): <b>Angestrebt wurden neben einer syntaktischen und semantischen Analyse auch die Bewältigung von Unterschieden zwischen Ausgangs- und Zielsprache </b>– also der klassischen Übersetzungsprobleme, wie sie auch aus der Humanübersetzung bekannt sind.
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