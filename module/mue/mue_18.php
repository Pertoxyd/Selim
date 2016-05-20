<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_lueckentext.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "MÜ: Probleme Übung 8a " );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Probleme: Übung 8b" );

// Text
$tpl->assign( "text", "Ergänze den folgenden Lückentext:" );

// Lückentext
$tpl->assign( "lueckentext", 
"<p>Maschinelle Übersetzungsprogramm können auf bestimmte</p>
<div class='input-group' >
	<input class='form-control' type='text' name='item1' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item1, 'Fachgebiete')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>zugeschnitten sein. Sie sind dann mit einem fachspezifischen</p>
<div class='input-group' >
	<input class='form-control' type='text' name='item2' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item2, 'Wörterbuch')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>ausgestattet. Das heißt z.B., dass dem System </p>
<div class='input-group' >
	<input class='form-control' type='text' name='item3' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item3, 'technische')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>Begriffe bekannt sind, die sogar ein Muttersprachler relativ selten benutzt. Oder es erkennt, dass mehrdeutige 
Begriffe im speziellen Arbeitszusammenhang des Nutzers immer nur eine ganz bestimmte Bedeutung haben.</p>

" );

// Button Funktionalitäten
$tpl->assign( "btn-loesungAnzeigen", "form.item1.value='Fachgebiete';form.item2.value='Wörterbuch';form.item3.value='technische';" );
$tpl->assign( "btn-allesLoeschen", "form.item1.value='';form.item2.value='';form.item3.value='';" );

// <input type=\"text\" class=\"form-control\" /> <input type=\"text\" class=\"form-control\" />

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