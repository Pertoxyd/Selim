<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext_inputs.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Historie" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Maschinelle Übersetzung" );
$tpl->assign( "module_mobile_title", "SELiM - MÜ" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Probleme: Übung 1" );

// Text
$tpl->assign( "text", "Viele MÜ-Systeme würden den Satz richtig mit 'He wrote a letter to the bank' übersetzen.
Doch wie sähe eine schlechte Übersetzung dieses Satzes ins Englische aus? 
Trage die Lösung in den Kasten ein und klicke auf den 
Lösungsbutton." );

// Aufgabennstellung
$tpl->assign( "beispiel", "Er schrieb einen Brief an die Bank." );

// Funktion zur Validierung
$tpl->assign( "ValidateFunction", "inputVal()" );

// Lösungen (kommasepariert eintragen)
$tpl->assign( "loesungen", "He wrote a letter to the bench,He wrote a letter to the bench." );

// Überzählige Inputs ausblenden
$tpl->assign( "input1", "" );
$tpl->assign( "input2", "hidden" );
$tpl->assign( "input3", "hidden" );
$tpl->assign( "input4", "hidden" );

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Lösungsvorschlag" );
$tpl->assign( "iwisTipp", "Wir verstehen diesen Satz sofort, obwohl das Wort 'Bank' viele Bedeutungen haben kann. 
Das MÜ-System steht vor dem Problem, entscheiden zu müssen, in welchem Kontext das Wort gerade gebraucht wird: 
ob es um die Parkbank oder das Geldinstitut geht. Dieses Phänomen der Doppeldeutigkeit nennt man Homographie." );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");

// Und die Seite anzeigen
$tpl->display();
?>