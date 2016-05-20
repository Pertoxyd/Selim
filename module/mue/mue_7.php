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
$tpl->assign( "website_title", "90er Jahre" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "90er Jahre" );

// Bildpfad
$tpl->assign( "image_path", "../../images/mue/Jahrmarkt-Bild-6.png" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "
Seit den 90er Jahren hat die MÜ wieder an Bedeutung gewonnen. Neue Ansätze führten zu neuen Erfolgen. 
So begann man z.B., sich mit der Übersetzung gesprochener Sprache auseinanderzusetzen.<br />
<br />
<b>Ebenso verlagerte man den Schwerpunkt von der reinen Forschung auf die Entwicklung praktischer Anwendungen.</b><br />
<br />
Es entstanden integrierte Übersetzer-Arbeitsplätze, spezialisierte Übersetzungssysteme für fest umgrenzte Fachgebiete 
oder PC-Versionen früherer Mainframe-Systeme. Auch die Entwicklung des Internet hat natürlich zum Aufschwung der MÜ beigetragen.
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