<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_selects.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Historie" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Software: Übung 3" );

// Text
$tpl->assign( "text", "Wähle den richtigen Begriff aus:" );

// Select Text
$tpl->assign( "selects", 
"
<p>Computerunterstützte Übersetzungssysteme können Übersetzern die </p>
<select class='form-control selects' name='select1'>
	<option value='2'>anspruchsvolle</option>
	<option value='1'>langweilige</option>
	<option value='0' selected></option>
</select>
<p>Arbeit abnehmen: Sie können</p>
<select class='form-control selects' name='select2'>
	<option value='1'>korrekte</option>
	<option value='2'>ann&auml;herungsweise</option>
	<option value='0' selected></option>
</select>
<p>Übersetzungen für einfache Sätze und</p>
<select class='form-control selects' name='select3'>
	<option value='2'>richtige</option>
	<option value='1'>ann&auml;herungsweise</option>
	<option value='0' selected></option>
</select>
<p>Übersetzungen für schwierige Sätze liefern.</p>
<p>Post-Editing, nachträgliches „Aufräumen“ der Übersetzung, ist bei der Humanübersetzung</p>
<select class='form-control selects' name='select4'>
	<option value='2'>nie</option>
	<option value='1'>auch gelegentlich</option>
	<option value='0' selected></option>
</select>
<p>nötig.</p>
<p>Wenn man das Genre des Textes vor der Übersetzung genau identifiziert, kann das MÜ-System</p>
<select class='form-control selects' name='select5'>
	<option value='1'>präziseres</option>
	<option value='2'>linguistischeres</option>
	<option value='0' selected></option>
</select>
<p>Vokabular und</p>
<select class='form-control selects' name='select6'>
	<option value='1'>speziellere</option>
	<option value='2'>allgemeinere</option>
	<option value='0' selected></option>
</select>
<p>Algorithmen benutzen.</p>
<p>Beim Pre-Editing wird der Quelltext dem</p>
<select class='form-control selects' name='select7'>
	<option value='1'>eingeschränkten</option>
	<option value='2'>erweiterten</option>
	<option value='0' selected></option>
</select>
<p>Vokabular und den</p>
<select class='form-control selects' name='select8'>
	<option value='1'>eingeschränkten</option>
	<option value='2'>komplexen</option>
	<option value='0' selected></option>
</select>
<p>syntaktischen Formen des MÜ-Systems angepasst.</p>
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