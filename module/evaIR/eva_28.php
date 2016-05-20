<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Benutzerstandpunkt (2/3)" );

// Text
$tpl->assign( "text", "
Benutzer 1 (B1): nach 4 relevanten Dokumenten ab<br />
Benutzer 2 (B2): bricht nach 5 nicht-relevanten Dokumenten in Folge ab<br />
Benutzer 3 (B3): bricht nach 10 Dokumenten ab<br />
Berechne nun bitte recall und precision für jedes System und für jeden Benutzer (a+c wird auf 20 geschätzt) und trage deine 
Ergebnisse in die Tabelle ein (runde bitte auf zwei Nachkommastellen).<br />
<br />
<p>hier sind nochmal die Ergebnisse der Vorseite aufgeführt.</p>
<table class='table text-center'>
	<thead class='bg-primary text-center'>
		<tr>
			<th></th>
			<th colspan='2' class='text-center'>B1</th>
		</tr>
		<tr>
			<th></th>
			<th class='text-center'>a</th>
			<th class='text-center'>b</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td>4</td>
			<td>8</td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td>4</td>
			<td>6</td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td>4</td>
			<td>10</td>
		</tr>
	</tbody>
</table>
<table class='table text-center'>
	<thead class='bg-primary text-center'>
		<tr>
			<th></th>
			<th colspan='2' class='text-center'>B2</th>
		</tr>
		<tr>
			<th></th>
			<th class='text-center'>a</th>
			<th class='text-center'>b</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td>2</td>
			<td>6</td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td>4</td>
			<td>10</td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td>3</td>
			<td>7</td>
		</tr>
	</tbody>
</table>
<table class='table text-center'>
	<thead class='bg-primary text-center'>
		<tr>
			<th></th>
			<th colspan='2' class='text-center'>B3</th>
		</tr>
		<tr>
			<th></th>
			<th class='text-center'>a</th>
			<th class='text-center'>b</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td>2</td>
			<td>8</td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td>4</td>
			<td>6</td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td>3</td>
			<td>7</td>
		</tr>
	</tbody>
</table>
<p>In diese Tabelle kannst du die Ergebnisse deiner Berechnungen eintragen. </p>
<table class='table'>
	<thead class='bg-primary text-center'>
		<tr>
			<th></th>
			<th colspan='2' class='text-center'>B1</th>
		</tr>
		<tr>
			<th></th>
			<th class='text-center'>r</th>
			<th class='text-center'>p</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td><input type='text' name='0,2' class='form-control' /></td>
			<td><input type='text' name='0,33' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td><input type='text' name='0,2' class='form-control' /></td>
			<td><input type='text' name='0,4' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td><input type='text' name='0,2' class='form-control' /></td>
			<td><input type='text' name='0,29' class='form-control' /></td>
		</tr>
	</tbody>
</table>
<table class='table'>
	<thead class='bg-primary text-center'>
		<tr>
			<th></th>
			<th colspan='2' class='text-center'>B2</th>
		</tr>
		<tr>
			<th></th>
			<th class='text-center'>r</th>
			<th class='text-center'>p</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td><input type='text' name='0,1' class='form-control' /></td>
			<td><input type='text' name='0,25' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td><input type='text' name='0,2' class='form-control' /></td>
			<td><input type='text' name='0,29' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td><input type='text' name='0,15' class='form-control' /></td>
			<td><input type='text' name='0,3' class='form-control' /></td>
		</tr>
	</tbody>
</table>
<table class='table'>
	<thead class='bg-primary text-center'>
		<tr>
			<th></th>
			<th colspan='2' class='text-center'>B3</th>
		</tr>
		<tr>
			<th></th>
			<th class='text-center'>r</th>
			<th class='text-center'>p</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td><input type='text' name='0,1' class='form-control' /></td>
			<td><input type='text' name='0,2' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td><input type='text' name='0,2' class='form-control' /></td>
			<td><input type='text' name='0,4' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td><input type='text' name='0,15' class='form-control' /></td>
			<td><input type='text' name='0,3' class='form-control' /></td>
		</tr>
	</tbody>
</table>
<p id='alertBox'></p>
<button type='button' class='btn btn-default pull-right' onClick='inputTable()'>Abschicken</button>
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