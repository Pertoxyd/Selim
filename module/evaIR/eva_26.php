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
$tpl->assign( "module_headline", "Benutzerstandpunkt" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktBen.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Benutzerstandpunkt" );
// Text
$tpl->assign( "text", "
Verschiedene Benutzer verhalten sich unterschiedlich bei der Sichtung der selektierten Dokumente. 
Da im allgemeinen nie die ganze Menge an gefundenen Dokumenten durchgearbeitet wird, muß es Kriterien geben, nach denen der Benutzer 
die Sichtung abbricht. Möglichkeiten hierfür sind, daß der Benutzer die Dokumentmenge sichtet, bis er:
<ul>
	<li><p>n Dokumente gesehen hat</p></li>
	<li><p>n relevante Dokumente gesehen hat</p></li>
	<li><p>n nicht-relevante Dokumente gesehen hat</p></li>
	<li><p>n nicht-relevante Dokumente in Folge gesehen hat</p></li>
</ul>
<p>Je nachdem, für welches Kriterium sich ein Benutzer entscheidet, können sich für ein und dasselbe Suchergebnis sehr unterschiedliche recall- 
und precision-Werte ergeben. Aussagen über die Qualität eines Ergebnisses sind daher sehr stark benutzerabhängig.</p>
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>