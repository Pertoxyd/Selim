<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_lueckentext.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung MÜ" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", " Evaluierung: Übung 3" );

// Text
$tpl->assign( "text", "	
Du bist Mitarbeiter der Gumbott GmbH, die im Bereich der Gummiproduktion marktführend in Deutschland ist. 
Nun möchte man den internationalen Markt erobern, stellt dafür eine Vielzahl von neuen Mitarbeitern ein und hat daher einen 
gesteigerten Bedarf an Übersetzungen. Diesen möchte man unter anderem mit Hilfe eines 
MÜ-Systems decken. Dein Chef beauftragt Dich, aus der getroffenen Vorauswahl das beste Produkt auszuwählen. Dir stehen zur Auswahl:" );

// Lückentext
$tpl->assign( "lueckentext", 
"<table class='table'>
	<thead>
		<tr>
			<th>Kriterien</th>
			<th>TRADUCTORI 309</th>
			<th>TRUDACTORI 903</th>
			<th>TRODICTORA 039</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Unterstützung beim Postediting</td>
			<td>ja</td>
			<td>ja</td>
			<td>ja</td>
		</tr>
		<tr>
			<td>Translation Memory</td>
			<td>nein</td>
			<td>ja</td>
			<td>ja</td>
		</tr>
		<tr>
			<td>Übersetzungsgeschwindigkeit</td>
			<td>sehr gut</td>
			<td>befriedigend</td>
			<td>befriedigend</td>
		</tr>
		<tr>
			<td>Unterstützter Wortschatz</td>
			<td>Standard</td>
			<td>auch naturwissenschaftliches Vokabular</td>
			<td>auch naturwissenschaftliches Vokabular</td>
		</tr>
		<tr>
			<td>Netzwerkfähigkeit</td>
			<td>ja</td>
			<td>nein</td>
			<td>ja</td>
		</tr>
		<tr>
			<td>Preis</td>
			<td>3200€</td>
			<td>2900€</td>
			<td>3400€</td>
		</tr>
	</tbody>
</table>
<p>Bitte vergleiche deine Überlegungen mit iWis.</p>
" );

// Button Funktionalitäten
$tpl->assign( "btn-loesungAnzeigen", "form.item1.value='Komposita';form.item2.value='zusammengesetztes';" );
$tpl->assign( "btn-allesLoeschen", "form.item1.value='';form.item2.value='';form.item3.value='';" );

// <input type=\"text\" class=\"form-control\" /> <input type=\"text\" class=\"form-control\" />
// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. 
$tpl->assign("visibility", "");
$tpl->assign( "iwisHeadline", "iWis Überlegungen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" );
$tpl->assign( "iwisTipp", "
<b>TRODICTORA 039</b> ...ist zwar das teuerste System, bietet aber alle wichtigen Funktionen.<br />
<br />
<b>TRUDACTORI 903</b> ...verfügt zwar über naturwissenschaftliches Vokabular und könnte somit den chemischen Aspekt der Gummiproduktion bedienen, 
doch fehlt dem System die Netzwerkfähigkeit. Die vielen neuen Mitarbeiter sollten aber die Möglicheit haben, auf eine gemeinsame Übersetzungsbasis 
zurückzugreifen.<br />
<br />
<b>TRADUCTORI 309</b> ...kommt nicht in Frage, weil im Lieferumfang nur Standardvokabular unterstützt wird und es über kein TM verfügt. In einer Firma, 
die viele ähnliche Dokumente zu übersetzen hat, ist ein TM aber unabdingbar und kann den Übersetzungsprozess enorm beschleunigen.


" );
$tpl->assign("buttonVisibility", "hidden");

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>