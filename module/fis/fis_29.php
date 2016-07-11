<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_freitext.tpl");

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
$tpl->assign( "module_headline", "Aufgabe 9" );

// Aufgabenstellung und Erklärungstext
$tpl->assign( "infoText", " " );

// Text
$tpl->assign( "text", "Wo liegt der Fehler in der folgenden Anweisung?<p><code>UPDATE Personal ('Miriam Köhler', 
'geschieden');</code></p>" );
$tpl->assign( "text2", "Was passiert, wenn man die folgende Anweisung ausführt?<p><code>DELETE FROM Personal;</code></p>" );
$tpl->assign( "text3", "Funktioniert die folgende SQL-Anweisung? Begründen Sie Ihre Antwort!<p><code>INSERT INTO Personal 
SET Gehalt = 900 WHERE Name = 'Kathrin Schuster';</code></p>" );
// Richtige Lösungen
$tpl->assign( "loesung1", "Diese Anweisung vermischt die Funktion <code>UPDATE</code> mit der Funktion <code>INSERT</code>.
Um Werte in der Tabelle Personal zu aktualisieren, ist die folgende Syntax zu verwenden: <code>UPDATE Personal SET 
FamStatus = 'geschieden' WHERE Name = 'Miriam Köhler';</code>");
$tpl->assign( "loesung2", "Alle Zeilen in der Tabelle Personal werden gelöscht!");
$tpl->assign( "loesung3", "Nein. Hier werden der <code>UPDATE-</code> und der <code>INSERT-</code>Befehl kombiniert. 
Richtig wäre entweder <code>INSERT INTO Personal (Gehalt) VALUES (900) WHERE Name = 'Kathrin Schuster';</code> oder 
<code>UPDATE Personal SET Gehalt = 900 WHERE Name = 'Kathrin Schuster';</code>");




// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "toggleAnswer()");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Wenn Ihnen die Attribute nicht als Primärschlüssel geeignet erscheinen, können Sie sie auch kombinieren oder sich 
weitere Attribute überlegen sowie deren Einsatz begründen!" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>