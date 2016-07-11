<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_selects.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Aufgabe 2" );

// Text
$tpl->assign( "text", "Wählen Sie nun bitte die korrekten Kardinalitäten aus!
<img class='img-responsive center-block' src='../../images/fis/aufgabe2.jpg'>");

$tpl->assign( "selects","
<div class='row'>
    <div class=\"col-md-4\">
        <div class=\"well\">
            <p>Feld 1</p>
            <select class='form-control selects' name='select1'>
                <option value='0'>1</option>
                <option value='1'>n</option>
                <option value='2'>m</option>
            </select>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"well\">
            <p>Feld 2</p>
            <select class='form-control selects' name='select1'>
                <option value='0'>1</option>
                <option value='1'>n</option>
                <option value='2'>m</option>
            </select>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"well\">
            <p>Feld 3</p>
            <select class='form-control selects' name='select1'>
                <option value='1'>1</option>
                <option value='0'>n</option>
                <option value='2'>m</option>
            </select>
        </div>
    </div>
</div>
<div class='row'>
    <div class=\"col-md-4\">
        <div class=\"well\">
            <p>Feld 4</p>
            <select class='form-control selects' name='select1'>
                <option value='1'>1</option>
                <option value='0'>n</option>
                <option value='2'>m</option>
            </select>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"well\">
            <p>Feld 5</p>
            <select class='form-control selects' name='select1'>
                <option value='1'>1</option>
                <option value='0'>n</option>
                <option value='2'>m</option>
            </select>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"well\">
            <p>Feld 6</p>
            <select class='form-control selects' name='select1'>
                <option value='0'>1</option>
                <option value='1'>n</option>
                <option value='2'>m</option>
            </select>
        </div>
    </div>
</div>");

// Validierungsfunktion
$tpl->assign("btn-check", "checkSelects()");

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