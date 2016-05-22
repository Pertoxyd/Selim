<?php
include("../../Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Einordnung des Themas" );

// Text
$tpl->assign( "text", "
<p>Das Entity-Relationship-Modell (kurz: ER-Modell oder ERM) ist ein konzeptionelles Datenmodell zur Erstellung eines 
Datenbauplans für ein Informationssystem.</p>
<p>Die ER-Modellierung lässt sich durch folgende drei Schritte charakterisieren:</p>
<ol>
    <li>
        Auswahl von Objekten aus der realen Welt,<br/>
        Beziehungen, die zwischen diesen bestehen, <br/>
        und Attribute, die Objekte und Beziehungen näher kennzeichnen,
    </li>
    <li>
        Benennung der ausgewählten Objekte und Beziehungen,
    </li>
    <li>
        Klassifikation der Objekte und Beziehungen.
    </li>
</ol>
<p>Das Ergebnis der ER-Modellierung stellt einen Ausschnitt der Realität dar, der für eine Problemstellung wichtig 
ist.</p>
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