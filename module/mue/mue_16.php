<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext_inputs.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Probleme: Übung 7" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", " Probleme: Übung 7" );

// Text
$tpl->assign( "text", "Was hat das System hier trotz Schwierigkeiten richtig gemacht? Trage das Wortpaar (englisch - deutsch) in den 
untenstehenden Kasten ein und klicke auf den Lösungsbutton.");

// Beispiel
$tpl->assign( "beispiel", "
<u>Ausgangstext:</u><br />
The boss entered the room. She had a look at the letter and then decided.<br />
<u>Übersetzung:</u><br />
Die Chefin betrat den Raum. Sie betrachtete den Brief und entschied dann.
" );

// Funktion zur Validierung
$tpl->assign( "ValidateFunction", "inputVal()" );

//Lösungen
$tpl->assign( "loesungen", "the boss,die chefin" );

// Überzählige Inputs ausblenden
$tpl->assign( "input1", "" );
$tpl->assign( "input2", "" );
$tpl->assign( "input3", "hidden" );
$tpl->assign( "input4", "hidden" );

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "");
$tpl->assign( "iwisHeadline", "iWis Lösungsvorschlag" );
$tpl->assign( "iwisTipp", "Das System hat satzübergreifend analysiert und 'bemerkt', dass sich 'she' auf 'the boss' bezieht, und dass 'the boss', 
wenn weiblich, im Deutschen mit 'die Chefin' übersetzt wird." );



include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>