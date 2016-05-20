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
$tpl->assign( "module_headline", "Koordination der Standardmaße" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktKoo.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Nullantwort" );
// Text
$tpl->assign( "text", "
Möchte man recall-precision-Paare zweier Systeme vergleichen, gilt, dass (R1, P1) 'besser' ist als (R2, P2), wenn<br />
<br />
R1 >= R2 & P1 > P2<br />
<br />
oder<br />
<br />
R1 > R2 & P1 >= P2<br />
<br />
Dabei ist allerdings zu bedenken, dass der Benutzer auch Präferenzen haben kann, die für ihn entweder recall oder precision wichtiger 
werden lassen. Möchte er sich umfassend und detailliert informieren, ist hoher recall entscheidend. Möchte er möglichst schnell einen 
Überblick gewinnen, ist gute precision wichtiger. Daher wäre es nützlich, die einzelnen Maße entsprechend gewichten zu können.
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>