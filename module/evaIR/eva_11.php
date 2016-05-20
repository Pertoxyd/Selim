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
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Standardmaß 'precision'" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/precision.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Precision" );
// Text
$tpl->assign( "text", "

Die Genauigkeit eines Systems bei der Ermittlung relevanter Dokumente wird als precision bezeichnet (wieviele gefundene Dokumente sind relevant?). 
Precision steht für das Verhältnis der relevanten Dokumente, die das System ermittelt hat (<span style='color: #00CC66'>a</span>) zu allen Dokumenten, 
die das System ermittelt hat (<span style='color: #00CC66'>a</span> + <span style='color: #FFCC00'>b</span>). 

<p class='padding bg-info'>Merkhilfe: <span style='color: #FFCC00'>b</span> steht für <b>B</b>allast</p>

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