<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

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
$tpl->assign( "module_headline", "ENDE" );

// Text
$tpl->assign( "text", "Sie haben sich die Grundlagen zum Thema 'Fakteninformationssysteme' in den Bereichen 
Datenmodellierung und Handling von Datenbanken mit SQL erarbeitet.<p>Vermittelt wurden die Kenntnisse und Fähigkeiten</p>
<ul>
<li>Daten selbstständig zu strukturieren,</li>
<li>die Zusammenhänge zwischen den Daten grafisch in einem ERM darzustellen,</li>
<li>das ERM anschließend in ein Relationenmodell überzuleiten, sowie</li>
<li>grundlegende SQL-Befehle (<code>INSERT</code>, <code>UPDATE</code>, <code>DELETE</code> und <code>SELECT</code>) zu 
formulieren.</li>
</ul><br/><p>Du hast Anmerkungen, Fragen oder Anregungen? Schreib uns dein Feedback!</p><div class='btn-group'>
<a href='mailto:test@test.de' type='button' class='btn btn-primary btn-lg'><span class='glyphicon glyphicon-envelope'>
</span></a><a href='mailto:test@test.de' type='button' class='btn btn-primary btn-lg'>Mailprogramm öffnen</a></div>");

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