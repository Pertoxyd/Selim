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
$tpl->assign( "module_headline", "Relationales Datenmodell" );

// Text
$tpl->assign( "text", "Bei der Transformation des ERM ins das Relationale Datenmodell sind folgende Regeln zu beachten:
<ul>
<li>Für jede Entitätsmenge wird eine Tabelle erstellt.</li>
<li>Sind zwei Entitätsmengen A und B durch eine 1:1- oder 1:n- Beziehung verbunden, dann wird der Schlüssel von B als 
<strong>Fremdschlüssel</strong> in A als zusätzliches Attribut eingetragen.</li>
<li>Sind zwei Entitätsmengen A und B durch eine m:n-Beziehung verbunden, dann wird für diese Beziehung eine eigene 
Tabelle angelegt. Als Attribute werden die Schlüssel verwendet.</li>
</ul>");

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