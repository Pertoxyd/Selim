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
$tpl->assign( "module_headline", "Sonderfälle bei der Berechnung" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktRecPre.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Nullantwort" );
// Text
$tpl->assign( "text", "
Bei der Nullantwort unterscheidet man folgende Fälle: <br />
<br />
<b>Negative Nullantwort:</b><br />
a=0, b>0, c>0 <br />
Es werden keine relevanten Dokumente geliefert, obwohl es welche gäbe.<br />
In diesem Fall wird nur der Zähler zu 0, und die Maße lassen sich berechnen.<br />
Werte: r=0, p=0<br />
<br />
<b>Positive Nullantwort:</b><br />
a=0, b>0, c=0<br />
Es werden keine relevanten Dokumente geliefert, wobei es auch keine gibt.<br />
Hier wird der Nenner bei der recall-Berechnung zu 0. Nachdem es ohnehin keine relevanten Dokumente gibt und das System sein Bestes getan hat, 
kann man r=1 festlegen. Die precision kann entweder berechnet werden (p=0), oder man vereinbart - wenn der recall das wichtigere Maß ist - dass sich die 
precision nach dem recall richtet, und vergibt für p ebenfalls 1.<br />
Werte: r=1, p=1 bzw. p=0<br />
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>