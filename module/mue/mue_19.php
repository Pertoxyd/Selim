<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_lueckentext.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ: Probleme: Übung 8c " );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Probleme: Übung 8c" );

// Text
$tpl->assign( "text", "Ergänze den folgenden Lückentext:" );

// Lückentext
$tpl->assign( "lueckentext", 
"<p>Häufig gibt es Probleme bei der Übersetzung von</p>
<div class='input-group' >
	<input class='form-control' type='text' name='item1' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item1, 'Komposita')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>Das heißt, dass das System ein </p>
<div class='input-group' >
	<input class='form-control' type='text' name='item2' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item2, 'zusammengesetztes')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>Wort in seine Einzelzeile zerlegt, und dann jedes einzeln für sich übersetzt.</p>

" );

// Button Funktionalitäten
$tpl->assign( "btn-loesungAnzeigen", "form.item1.value='Komposita';form.item2.value='zusammengesetztes';" );
$tpl->assign( "btn-allesLoeschen", "form.item1.value='';form.item2.value='';form.item3.value='';" );

// <input type=\"text\" class=\"form-control\" /> <input type=\"text\" class=\"form-control\" />
// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "iWis Lösungsvorschlag" );
$tpl->assign( "iwisTipp", "Mit \"sie\" könnte
<ul style=\"list-style-type:decimal\">
	<li>they</li>
	<li>she</li>
	<li>them</li>
	<li>her</li>
</ul>
gemeint sein." );


include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>