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
$tpl->assign( "module_headline", "Wichtig für die precision" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktPre.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Precision" );
// Text
$tpl->assign( "text", "
Oftmals ist precision für den Benutzer das wichtigere Maß, da es zumeist nicht auf die Vollständigkeit eines Ergebnisses ankommt, sondern darauf, 
dass man möglichst wenig Ballast geliefert bekommt (Ausnahme z.B. Patentrecherche, hier kommt es v.a. darauf an, dass kein Dokument übersehen wird). <br />
Wertebereich: 0 bis 1; ein guter Wert ist 1, ein schlechter Wert ist 0. <br />
Ist eine Ergebnismenge sehr groß, wird es im Normalfall schwierig, <span style='color: #00CC66'>a</span> genau zu bestimmen, da nicht unbedingt alle 
Dokumente gesichtet werden können. Daher wird die Ergebnismenge häufig 'abgeschnitten' (cut off). <br />
Um die Sortierleistung eines ranking-Systems zu beurteilen reicht precision alleine nicht aus; dazu benötigt man einen recall-precision-Graph, der recall 
und precision dokumentweise in Beziehung setzt.<br />
recall und precision sind voneinander abhängig: je vollständiger das Ergebnis ist (besserer recall), desto mehr Ballast wird zwangsläufig geliefert 
(schlechtere precision).
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