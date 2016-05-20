<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_prozess.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Übersetzungsverfahren Übung 3" );
//Modultitel
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Übersetzungsverfahren Übung 3" );

// Text
$tpl->assign( "text", "Nenne die drei Arbeitsschritte des Transferansatzes in chronologischer Reihenfolge:" );

// Inhalt für Bereiche
$tpl->assign( "bereich1", "
<input type='text' class='form-control input1' name='analyse' />
" );
$tpl->assign( "bereich2", "
<input type='text' class='form-control input2' name='transfer' />
" );
$tpl->assign( "bereich3", "
<input type='text' class='form-control input3' name='synthese' />
" );
$tpl->assign( "bereich4", "" );

$tpl->assign("ValidateFunction", "inputValOrder()");


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