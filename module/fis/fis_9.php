<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Kardinalitäten" );

// Text
$tpl->assign( "text", "Kardinalitäten geben darüber Auskunft, in welchem Verhältnis zwei Entitätstypen über einen 
bestimmten Beziehungstyp miteinander verbunden sind. Es werden folgende Kardinalitätsverhältnisse unterschieden:<br/><br/>
<p>
<strong>1 : 1 Beziehungen</strong><img class='img-responsive' src='../../images/fis/1zu1.jpg' alt='1 zu 1 Beziehung'><br/>
Jeder Entity-Typ steht mit höchstens einem Entity-Typ in Beziehung, z.B. Relation-Typ 'verheiratet' zwischen Personen
</p>
<p>
<strong>1 : n Beziehungen</strong><img class='img-responsive' src='../../images/fis/1zun.jpg' alt='1 zu n Beziehung'><br/>
Jeder Entity-Typ steht mit n>= 0 (keinem, einem oder mehreren) Entity-Typen in Beziehung, z.B. Professor kann mehrere 
Diplomanden betreuen
</p>
<p>
<strong>m : n Beziehungen</strong><img class='img-responsive' src='../../images/fis/mzun.jpg' alt='m zu n Beziehung'><br/>
Keine Restriktion zwischen Paaren von Entity-Typen, z.B. jeder Studierende kann mehrere Vorlesungen belegen; jede 
Vorlesung kann von mehreren Studierenden belegt werden
</p>" );

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