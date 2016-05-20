<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_prozess.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Software: Übung 1" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Software: Übung 1" );

// Text
$tpl->assign( "text", "Welcher Fall des Benutzereingriffs ist in folgendem Beispiel dargestellt?" );

// Inhalt für Bereiche
$tpl->assign( "bereich1", "
<p>„Erhalten Sie wenig zuviel graues durch glänzen? Haben Sie betrachtet, Ihr eigenes Haar zu färben?“</p>
" );
$tpl->assign( "bereich2", "
<p>„Scheint bei Ihnen ein wenig zuviel Grau durch? Haben Sie schon in Betracht gezogen, Ihr eigenes Haar zu färben?“</p>
" );
$tpl->assign( "bereich3", "" );
$tpl->assign( "bereich4", "
<p>Hier handelt es sich um:</p>
<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe'	/>
		<span>Preediting</span>
</label>
<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
	<input type='radio' name='aufgabe'	/>
	<span>Intermediate Editing</span>
</label>
<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
	<input class='solution' type='radio' name='aufgabe'	/>
	<span class='solution'>Postediting</span>
</label>
" );

//Validierungsfunktion
$tpl->assign("ValidateFunction", "radioVal()");

// Zweiten Pfeil bei Bedarf ausblenden (hidden)
$tpl->assign("hide2ndArrow", "hidden");

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