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
$tpl->assign( "module_headline", "Benutzerstandpunkt (1/3)" );

// Text
$tpl->assign( "text", "
Berechne für die drei in der Tabelle angegebenen Suchergebnisse (S1-S3) recall und precision. Die Dokumente (d01 - d16) sind mit '+' 
(= relevant) und mit '-' (= nicht-relevant) gekennzeichnet. Die Gesamtzahl der relevanten 
Dokumente wird auf 20 geschätzt. Berücksichtige bitte dabei, dass einzelne Benutzer mit einem Ergebnis unterschiedlich umgehen:<br />
<u>Benutzer 1 (B1):</u> nach 4 relevanten Dokumenten ab<br />
<u>Benutzer 2 (B2):</u> bricht nach 5 nicht-relevanten Dokumenten in Folge ab<br />
<u>Benutzer 3 (B3):</u> bricht nach 10 Dokumenten ab<br />
<table class='table'>
	<thead>
		<tr>
			<th></th>
			<th>S1</th>
			<th>S2</th>
			<th>S3</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>d01</td>
			<td>+</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d02</td>
			<td>-</td>
			<td>+</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d03</td>
			<td>+</td>
			<td>-</td>
			<td>+</td>
		</tr>
		<tr>
			<td>d04</td>
			<td>-</td>
			<td>-</td>
			<td>+</td>
		</tr>
		<tr>
			<td>d05</td>
			<td>-</td>
			<td>+</td>
			<td>+</td>
		</tr>
		<tr>
			<td>d06</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d07</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d08</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d09</td>
			<td>-</td>
			<td>+</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d10</td>
			<td>-</td>
			<td>+</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d11</td>
			<td>+</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d12</td>
			<td>+</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d13</td>
			<td>+</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>d14</td>
			<td>-</td>
			<td>-</td>
			<td>+</td>
		</tr>
		<tr>
			<td>d15</td>
			<td>+</td>
			<td></td>
			<td>+</td>
		</tr>
		<tr>
			<td>d16</td>
			<td>+</td>
			<td></td>
			<td>-</td>
		</tr>
	</tbody>
</table>
<p>Bestimme zunächst die einzelnen Variablen, die du für die Berechnung benötigst:</p>
<table class='table'>
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
			<td><input type='text' name='4' class='form-control' /></td>
			<td><input type='text' name='8' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td><input type='text' name='4' class='form-control' /></td>
			<td><input type='text' name='6' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td><input type='text' name='4' class='form-control' /></td>
			<td><input type='text' name='10' class='form-control' /></td>
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
			<th class='text-center'>a</th>
			<th class='text-center'>b</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td><input type='text' name='2' class='form-control' /></td>
			<td><input type='text' name='6' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td><input type='text' name='4' class='form-control' /></td>
			<td><input type='text' name='10' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td><input type='text' name='3' class='form-control' /></td>
			<td><input type='text' name='7' class='form-control' /></td>
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
			<th class='text-center'>a</th>
			<th class='text-center'>b</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>S1</p></td>
			<td><input type='text' name='2' class='form-control' /></td>
			<td><input type='text' name='8' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S2</p></td>
			<td><input type='text' name='4' class='form-control' /></td>
			<td><input type='text' name='6' class='form-control' /></td>
		</tr>
		<tr>
			<td><p>S3</p></td>
			<td><input type='text' name='3' class='form-control' /></td>
			<td><input type='text' name='7' class='form-control' /></td>
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