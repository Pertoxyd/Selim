<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_selects.tpl");

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
$tpl->assign( "module_headline", "Aufgabe 17" );

// Text
$tpl->assign( "text", "Sie wollen die Namen ihrer Mitarbeiter wissen, die in der Filiale 'Am Dammtor' arbeiten. Wie 
lautet die <code>SELECT</code>-Anweisung?");

// Select Text
$tpl->assign( "selects","<p id='lueckentext'><code>SELECT</code>
<select class='form-control selects' name='select1'>
	<option value='4'>Name</option>
	<option value='2'>Filiale.PersNr</option>
	<option value='0'>Filiale.Name</option>
	<option value='3'>Personal.FilialNr</option>
	<option value='1'>Personal.Name</option>
	<option value='5' selected></option>
</select>
<code>FROM</code>
<select class='form-control selects' name='select2'>
	<option value='2'>Filiale</option>
	<option value='1'>Filiale, Personal</option>
	<option value='3'>Personal</option>
	<option value='0' selected></option>
</select>
<code>WHERE</code>
<select class='form-control selects' name='select3'>
	<option value='2'>FilialNr</option>
	<option value='1'>Filiale.Name</option>
	<option value='3'>Personal.Name</option>
	<option value='4'>Filiale</option>
	<option value='5'>Name</option>
	<option value='0' selected></option>
</select>
<select class='form-control selects' name='select3'>
	<option value='3'>\></option>
	<option value='2'>\>=</option>
	<option value='1'>=</option>
	<option value='4'>\<=</option>
	<option value='5'>\<\></option>
	<option value='0' selected></option>
</select>
<select class='form-control selects' name='select3'>
	<option value='3'>Name</option>
	<option value='2'>Filiale.FilialNr</option>
	<option value='1'>'Am Dammtor'</option>
	<option value='4'>'City'</option>
	<option value='0' selected></option>
</select>
<code>AND</code>
<select class='form-control selects' name='select3'>
	<option value='1'>Filiale.FilialNr</option>
	<option value='2'>FilialNr</option>
	<option value='3'>Name</option>
	<option value='4'>Filiale.Name</option>
	<option value='0' selected></option>
</select>
<select class='form-control selects' name='select3'>
	<option value='3'>\></option>
	<option value='2'>\>=</option>
	<option value='1'>=</option>
	<option value='4'>\<=</option>
	<option value='5'>\<\></option>
	<option value='0' selected></option>
</select>
<select class='form-control selects' name='select3'>
	<option value='3'>Filiale.Name</option>
	<option value='2'>'Am Dammtor'</option>
	<option value='4'>FilialNr</option>
	<option value='1'>Personal.FilialNr</option>
	<option value='0' selected></option>
</select></p>;");

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