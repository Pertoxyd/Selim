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
$tpl->assign( "module_headline", "Relevanzbegriff" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktRel.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Geschichte der Maschinellen Übersetzung" );
// Text
$tpl->assign( "text", "
'Relevanz' bezeichnet die Übereinstimmung einer Anfrage mit einem gelieferten Dokument. Sie ist jedoch keine absolute Größe, sondern abhängig vom 
Interesse des Informationssuchenden und damit <b>subjektiv</b>. Denn hinter ein- und derselben Suchanfrage können sich ganz unterschiedliche Informationsbedürfnisse 
verbergen (z.B. Überblicksinformation oder detaillierte Daten). Darüber hinaus gibt es <b>graduelle</b> Abstufungen hinsichtlich der Relevanz (absolut, eingeschränkt, kaum, nicht), 
so dass eine Beurteilung, die die Ergebnismenge nur auf zwei Kategorien abbildet (relevant und nicht-relevant), oftmals schwierig ist.
<br />
Neben der hier gewählten Interpretation des Relevanzbegriffs gibt es noch weitere Arten von Relevanz (situative, objektive, Systemrelevanz). <br />
<br />
Relevanz fließt als wesentliche Größe in die Qualitätsbeurteilung des Suchergebnisses mit Hilfe der sog. Standardmaße ein.<br />
Bei der Relevanzbeurteilung können verschiedenste Probleme auftreten:<br />
Manchmal ergibt sich Relevanz erst bei einer globaleren Betrachtung; so können zwei Dokumente, die für sich betrachtet als bedingt relevant eingeschätzt 
werden, gemeinsam möglicherweise sehr relevant sein. Dagegen kann sich ein wichtiges Dokument durch ein anderes, unwichtiges Dokument als nicht relevant 
erweisen.<br />
Daneben können sich mehrere Dokumente, die im wesentlichen den gleichen Inhalt aufweisen, gegenseitig unnötig machen.<br />
Problematisch für die Relevanzbeurteilung kann auch der Nachweis von Dokumenten sein, die zwar inhaltlich zutreffen, die der Suchende aber bereits kennt.<br />
Generell lässt sich feststellen, dass die momentane Situation des Beurteilenden einen wesentlichen Einfluss auf die Relevanzberuteilung hat. Dazu zählt bspw. 
auch die Fragestellung die einer Recherche zugrunde liegt. Handelt es sich bspw. um eine Faktenrecherche, genügt manchmal ein einziges Dokument zur 
Beantwortung der Frage. Anders verhält es sich hingegen, wenn man einen Einstieg in ein neues Thema sucht oder einen State of the Art verfassen möchte.
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