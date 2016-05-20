<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_video.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Elementarparameter" );

// Text
$tpl->assign( "text", "Die Beziehungen zwischen den durchsuchten, den selektierten und den relevanten Dokumenten lassen sich gut 
in Form eines Mengendiagramms veranschaulichen." );

// Video Source
$tpl->assign( "videoSource", "../../movie/evaIR/Elementarparameter.mp4" );

// Text unter Video
$tpl->assign( "text2", "
Mit Hilfe dieser Teilmengen soll die Qualität des Ergebnisses berechnet werden. Die einzelnen Teilmengen werden daher künftig mit diesen Variablen bezeichnet:
<br />
<img src='../../images/evaIR/VarA.gif' alt='Elementarparameter A' /><br />
<img src='../../images/evaIR/VarB.gif' alt='Elementarparameter B' /><br />
<img src='../../images/evaIR/VarC.gif' alt='Elementarparameter C' /><br />
<img src='../../images/evaIR/VarD.gif' alt='Elementarparameter D' /><br />
Im nächsten Abschnitt werden die beiden wichtigsten Maße berechnet ...
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