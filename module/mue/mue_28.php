<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Historie" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Software" );

// Text
$tpl->assign( "text", "Die zwei Hauptkomponenten von MÜ-Systemen sind das Lexikon und der Übersetzungskern („Wege der Übersetzung“). Vollautomatische Übersetzungssysteme übersetzen Texte direkt in die Zielsprache, ohne den Benutzer in den Übersetzungsvorgang miteinzubeziehen. Bei computergestützten Systemen (CAT - computer aided translation) kann der Benutzer auf unterschiedliche Weise in den Übersetzungsprozess eingreifen.
<br />
<br />
Folgende Möglichkeiten des Benutzereingriffs sind denkbar:<br />
<br />
<ul>
	<li><p>Aufbereitung des zu übersetzenden Textes durch Übersetzer/Fachleute (Preediting)</p></li>
	<li><p>Reaktion eines Übersetzers auf bestimmte Probleme, die der Computer mit der Übersetzer hat und dem Übersetzer meldet (Intermediate Editing)</p></li>
	<li><p>„Nachredigieren“ des maschinell übersetzten Textes (Postediting)</p></li>
</ul>
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