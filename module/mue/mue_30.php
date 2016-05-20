<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_prozess.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Software: Übung 2" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Software: Übung 2" );

// Text
$tpl->assign( "text", "	
Betrachte folgende Textbeispiele:
" );

// Inhalt für Bereiche
$tpl->assign( "bereich1", "
<p>„Auch wenn M.Ü. Systeme manchmal Knaller bringen, gibt es viele Situationen, wo ihre Fähigkeit, sehr schnell zuverlässige, wenn auch noch lange nicht vollkommene, Übersetzungen zu produzieren, wertvoll ist.“</p>
" );
$tpl->assign( "bereich2", "
<div class='text-center'>
	<p>
		<span class='glyphicon glyphicon-resize-horizontal hidden-xs hidden-sm text-center '></span>
		<span class='glyphicon glyphicon-resize-vertical hidden-md hidden-lg text-center'></span>
	</p>
</div>
" );
$tpl->assign( "bereich3", "
„Die Fähigkeit von MÜ-Systemen, schnell relativ zuverlässige Übersetzungen zu produzieren, ist wertvoll - auch wenn die Systeme manchmal seltsame Lösungen liefern und die Übersetzungen noch lange nicht vollkommen sind.“
" );
$tpl->assign( "bereich4", "
<p>Lass' doch mal testweise die beiden Varianten dieses Satzes von <a href='https://translate.google.de/' target='_blank'>Google Translator  <span class='glyphicon glyphicon-new-window'></span></a> (oder einem anderen Übersetzungsprogramm) ins Englische übersetzen.
Gleiche deine Überlegungen dann mit iWi ab.
</p>

" );

//Validierungsfunktion
$tpl->assign("ValidateFunction", "radioVal()");

// Ersten und zweiten Pfeil bei Bedarf ausblenden (hidden)
$tpl->assign("hide1rstArrow", "hidden");
$tpl->assign("hide2ndArrow", "hidden");

// Vutton verstecken
$tpl->assign("hideButton", "hidden");

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "");
$tpl->assign( "iwisHeadline", "iWi's Überlegungen" );
$tpl->assign( "iwisTipp", "
&quot;Wie Du vielleicht bemerkt hast, hat das Programm deutlich gr&ouml;&szlig;ere Schwierigkeiten, 
die linke Satzvariante zu &uuml;bersetzen. Die Version im rechten Kasten ist vom Satzbau und von der Wortwahl her weniger 
komplex. Dies sind Ph&auml;nomene, die man beim Preediting ausnutzt.&quot;
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");

// Und die Seite anzeigen
$tpl->display();
?>