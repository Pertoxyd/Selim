<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_ueberschriften_vergeben.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ: Software: Übung 4" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Software: Übung 4" );

// Text
$tpl->assign( "text", "Welche sind die vier Hauptkomponenten der TRADOS workbench? Trage die richtigen Begriffe über ihrer Beschreibung ein:" );

// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "input_Korrektur()");

// Texte unter den Inputs für die die Überschriften vergeben werden sollen.
$tpl->assign("inputText1", "
<ul>
	<li><p>wichtigste Komponente der Workbench</p></li>
	<li><p>mehrsprachige Satzdatenbank Speicherung von Übersetzungseinheiten</p></li>
	<li><p>'fuzzy'- Suche nach Übereinstimmungen</p></li>
	<li><p>Das TM ermöglicht dem Übersetzer auf bereits übersetzte Texte zurückzugreifen und relevante Passagen zu übernehmen</p></li>
	<li><p>Jeder neu bearbeitete Text wird im TM paarweise gespeichert</p></li>
</ul>
");
$tpl->assign("inputText2", "
<ul>
	<li><p>Terminologieverwaltung</p></li>
	<li><p>Einzelanwendung / Teilprogramm der Workbench</p></li>
	<li><p>multilinguale Termini mit Zusatzinformationen (z.B. Definitionen, Grammatikangaben,...) als strukturierte Begriffseinträge</p></li>
</ul>
");
$tpl->assign("inputText3", "
<ul>
	<li><p>Schnittstelle Textverarbeitung</p></li>
	<li><p>Es kann direkt in Word gearbeitet werden.</p></li>
	<li><p>Andere Funktionen lassen sich von dort aus aufrufen.</p></li>
</ul>
");
$tpl->assign("inputText4", "
<ul>
	<li><p>für automatische Übersetzung</p></li>
</ul>
");
// Richtige Lösungen
$tpl->assign("loesung1", "Translation Memory");
$tpl->assign("loesung2", "MultiTerm");
$tpl->assign("loesung3", "Winword");
$tpl->assign("loesung4", "MÜ-Komponente");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Lösungsvorschlag" );
$tpl->assign( "iwisTipp", "Mein Lösungsforschlag:
<ul style=\"list-style-type:decimal\">
	<li>Translation Memory</li>
	<li>MultiTerm</li>
	<li>Winword</li>
	<li>MÜ-Komponente</li>
</ul>
" );



include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>