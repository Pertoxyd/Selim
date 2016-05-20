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
$tpl->assign( "module_headline", "MÜ: Probleme Übung 8a" );

// Text
$tpl->assign( "text", "Ergänze die folgenden Sätze, die die Hauptprobleme bei der MÜ erklären:" );

// Lückentext
$tpl->assign( "lueckentext", 
"<p>Häufig benutzen wir ein Wort, ohne dass uns bewusst ist, 
dass das Wort auch in einem anderen Zusammenhang benutzt werden könnte, dann allerdings eine ganz andere</p>
<div class='input-group' >
	<input class='form-control' type='text' name='item1' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item1, 'Bedeutung')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>hätte. Solche Wörter sind </p>
<div class='input-group' >
	<input class='form-control' type='text' name='item2' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item2, 'mehrdeutig')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>Im täglichen Gebrauch sind uns die </p>
<div class='input-group' >
	<input class='form-control' type='text' name='item3' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item3, 'syntaktischen Strukturen')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>der Sätze, die wir formulieren, nicht bewusst. Intuitiv sprechen wir 'richtig', denn die</p>
<div class='input-group' >
	<input class='form-control' type='text' name='item4' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item4, 'Grammatik')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>unserer Sprache ist uns mit in die Wiege gelegt worden. Hinzu kommt das</p>
<div class='input-group' >
	<input class='form-control' type='text' name='item5' value='' />
	<span class='input-group-btn'>
		<button class='btn btn-default' type='button' name='Button2' onClick=\"dasher(form.item5, 'Weltwissen')\">
			<span class='glyphicon glyphicon-ok'></span>
		</button>
	</span>
</div>
<p>, das wir uns im Laufe unseres Lebens angeeignet haben und das uns unsere Gegenüber meist intuitiv verstehen lässt.</p>

" );

// Button Funktionalitäten
$tpl->assign( "btn-loesungAnzeigen", "form.item1.value='Bedeutung';form.item2.value='mehrdeutig';form.item3.value='syntaktischen Strukturen';form.item4.value='Grammatik';form.item5.value='Weltwissen'" );
$tpl->assign( "btn-allesLoeschen", "form.item1.value='';form.item2.value='';form.item3.value='';form.item4.value='';form.item5.value=''" );

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