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
$tpl->assign( "module_headline", "Leere Antwortmenge" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktRecPre.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Nullantwort" );
// Text
$tpl->assign( "text", "
Bei der leeren Antwortmenge unterscheidet man folgende Fälle: <br />
<br />
<b>Leere Antwortmenge mit relevanten Dokumenten:</b><br />
a=0, b=0, c>0<br />
Es werden überhaupt keine Dokumente geliefert, obwohl es relevante gäbe.<br />
Hier wird der Nenner bei der precision zu 0. Für den recall lässt sich r=0 berechnen. Ist der recall der wichtigere Wert, richtet man sich mit 
dem Wert für die precision nach diesem und setzt dabei p=0. Sieht man davon ab, könnte man p auch auf 1 setzen, da das System keinen Ballast liefert.<br />
Werte: r=0, p=0/p=1<br />
<br />
<b>Leere Antwortmenge ohne relevante Dokumente:</b><br />
a=0, b=0, c=0<br />
Es werden keine Dokumente geliefert (es gibt ohnehin keine relevanten).<br />
Hier wird der Nenner bei recall und precision zu 0. Nachdem das System beim Auffinden relevanter Dokumente sein Bestes getan hat und auch keinen 
Ballast liefert, vergibt man die bestmöglichen Werte.<br />
Werte: r=1, p=1<br />
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>