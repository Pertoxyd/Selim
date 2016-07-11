<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_sql.tpl");

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
$tpl->assign( "module_headline", "Aufgabe 7" );

// Text
$tpl->assign( "text", "Ihr Programmierer Hans Müller hat die Firma verlassen.<p><strong>Formulieren Sie eine 
SQL-Anweisung mit der Sie seine Daten aus der Datenbank entfernen!</strong></p>");

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "visible");
$tpl->assign( "iwisHeadline", "Ausgangstabelle Personal" );
$tpl->assign( "iwisTipp", "
<table class='table table-bordered table-responsive'>
<tr>
<th>PersNr</th>
<th>Name</th>
<th>FamStatus</th>
<th>Position</th>
<th>Gehalt</th>
</tr>
<tr>
<td>1</td>
<td>Maria Schmidt</td>
<td>verheiratet</td>
<td>Sekertärin</td>
<td>4900</td>
</tr><tr>
<td>2</td>
<td>Thomas Meyer</td>
<td>ledig</td>
<td>Praktikant</td>
<td>2000</td>
</tr><tr>
<td>3</td>
<td>Hans Müller</td>
<td>ledig</td>
<td>Programmierer</td>
<td>5000</td>
</tr><tr>
<td>4</td>
<td>Jürgen Schmidt</td>
<td>verheiratet</td>
<td>Verkäufer</td>
<td>5000</td>
</tr><tr>
<td>5</td>
<td>Kathrin Schuster</td>
<td>geschieden</td>
<td>Personalleiterin</td>
<td>5400</td>
</tr><tr>
<td>6</td>
<td>Mario Förster</td>
<td>ledig</td>
<td>Verkäufer</td>
<td>4800</td>
</tr>
</table>" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>