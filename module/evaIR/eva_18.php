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
$tpl->assign( "image_alt", "Sonderfälle bei der Berechnung" );
// Text
$tpl->assign( "text", "
Es können Fälle auftreten, bei denen bei der Berechnung von recall oder precision der Nenner zu 0 wird. Da Rechnen hier unmöglich ist, 
muss man sich überlegen, welche Werte sinnvoller Weise festgelegt werden könnten.<br />
<br />
Man kann die Fälle 'Nullantwort' und 'Leere Antwortmenge' unterscheiden: <br />
Bei einer <b>Nullantwort</b> werden keine relevanten Dokumente geliefert (aber nicht-relevante!). <br />
In einer <b>Leeren Antwortmenge</b> befinden sich dagegen gar keine Dokumente (weder relevante noch nicht-relevante).<br />
<br />
Bei der Betrachtung dieser Konstellationen ist besonders wichtig, ob überhaupt relevante Dokumente vorhanden sind, die gefunden werden könnten.
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>