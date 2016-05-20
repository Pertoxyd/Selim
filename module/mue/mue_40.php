<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_selects.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung MÜ" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Evaluierung: Übung 2" );

// Text
$tpl->assign( "text", "Fülle die Lücken im folgenden Text:" );

// Select Text
$tpl->assign( "selects", 
"
<p>Zur Evaluierung eines MÜ-Systems benötigt man</p>
<select class='form-control selects' name='select1'>
	<option value='1'>Testsuiten</option>
	<option value='2'>Textkorpora</option>
	<option value='0' selected></option>
</select>
<p>also konstruierte Satzmengen, die bestimmte linguistische Phänomene abdecken. Zum Beispiel kann hiermit 
getestet werden, ob ein System mit gewissen grammatischen Strukturen einer Sprache umgehen kann.</p>
<select class='form-control selects' name='select2'>
	<option value='2'>Testsuiten</option>
	<option value='1'>Textkorpora</option>
	<option value='0' selected></option>
</select>
<p>sind Sammlungen von natürlich vorkommenden Texten in elektronischer Form und dienen als kontrollierte und möglichst wirklichkeitsnahe Grundlage für die Tests.
Möchte man die Verständlichkeit des Ausgabetexts testen, ist es am sinnvollsten, mit</p>
<select class='form-control selects' name='select3'>
	<option value='1'>monolingualen</option>
	<option value='2'>bilingualen</option>
	<option value='0' selected></option>
</select>
<p>Testpersonen zu arbeiten, während man bei der Überprüfung des übertragenen Informationswertes idealerweise mit</p>
<select class='form-control selects' name='select4'>
	<option value='2'>monolingualen</option>
	<option value='1'>bilingualen</option>
	<option value='0' selected></option>
</select>
<p>Versuchspersonen arbeitet. <br />
Letztendlich bleibt festzuhalten, dass es für die Evaluierung von MÜ-Systemen 
keine einheitliche Methode gibt. Nicht die Evaluierung der \"nackten\" Übersetzungssoftware macht Sinn, sondern die Beurteilung.</p>
<select class='form-control selects' name='select5'>
	<option value='1'>einer möglichst guten Kooperation zwischen Benutzer und Anwendungssystem in einem spezifischen Kontext.</option>
	<option value='2'>eines möglichst leistungsfähigen Übersetzungskerns einhergehend mit einem ansprechenden Design.</option>
	<option value='0' selected></option>
</select>
");

// Validierungsfunktion
$tpl->assign("btn-check", "checkSelects()");

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