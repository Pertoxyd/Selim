<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_text_klick.tpl");

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
$tpl->assign( "module_headline", "Aufgabe 1" );

// Text
$tpl->assign( "infoText", "Klicken Sie auf die Worte im untenstehenden Text, die Ihrer Meinung nach als Objekttypen 
(Entity-Typen, Relationship-Typen) realisiert werden müssen!");

// Aufgaben-Text
$tpl->assign( "taskText", "Die <strong id='bib'>Bibliothek</strong> benötigt ein <strong id='is'>Informationssystem</strong> mit welchem 
<strong id='info'>Informationen</strong> über das <strong id='verleihen'>Verleihen</strong> und <strong class='vormerken'>Vormerken</strong> der 
<strong class='video'>Videofilme</strong> verwaltet werden sollen.<br/><br/>Die <strong class='ausleiher'>Ausleiher</strong> 
können gleichzeitig mehrere <strong class='video'>Videofilme</strong> ausleihen 
und die <strong class='video'>Videofilme</strong> können auch mehrmals <strong class='vormerken'>vorgemerkt</strong> 
werden.<br/><br/>Die <strong class='ausleiher'>Ausleiher</strong> müssen <strong id='strafen'>Strafen</strong> für verspätete 
<strong id='rueckgaben'>Rückgaben</strong> <strong id='zahlen'>zahlen</strong>.");

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