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
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Recall und Precision" );

// Aufgabenstellung und Erklärungstext
$tpl->assign( "infoText", "Überlege dir Lösungen, die du dir in den Texfeldern noieren kannst, vergleiche anschließend deine Lösung." );

// Text
$tpl->assign( "text", "Welche Werte sind bei recall und precision 'gut'?" );
$tpl->assign( "text2", "Welche Probleme ergeben sich bei ranking-Systemen?" );
// Richtige Lösungen
$tpl->assign( "loesung1", "Je höher die Werte für recall und precision sind, desto besser. Allerdings ist ein recall-Wert von 60% bereits sehr gut.");
$tpl->assign( "loesung2", "Die Maße sagen nichts darüber aus, wie gut ein System die Ergebnisse sortiert hat.");



// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "toggleAnswer()");


$tpl->assign("hideBlock1", "hidden");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Setze die Werte ein für den Fall, dass das System keine relevanten/alle relevanten Dokumente bzw. keine relevanten/nur relevante Dokumente findet.
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>