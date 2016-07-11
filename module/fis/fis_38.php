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
$tpl->assign( "module_headline", "Anwendung Boolescher Logik" );

// Text
$tpl->assign( "text", "Bedingungen können in der <code>WHERE</code>-Klausel nach den Gesetzen des Aussagenkalküls 
miteinander verknüpft werden. Folgende logische Operatoren sind unter SQL verfügbar:<p><code>NOT</code><br/>Verneinung 
einer Bedingung; Ausschluss aller Tupel, die die Bedingung erfüllen.</p><p><code>AND</code><br/>Beide Bedingungen müssen
vom Tupel erfüllt sein, damit es selektiert wird.</p><p><code>OR</code><br/>Mindestens eine Bedingung muss vom Tupel 
erfüllt sein, damit es selektiert wird.</p><p>Wie in der Arithmetik (Punkt- vor Strichrechnung) gibt es auch hier 
Prioritätsregeln:
<ul>
<li><code>NOT</code> geht vor...</li>
<li><code>AND</code> geht vor...</li>
<li><code>OR</code>.</li>
<li>Klammern gehen in jedem Fall vor.</li>
</ul></p>");

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