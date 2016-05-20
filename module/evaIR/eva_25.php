<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_bereich.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Evaluierung IR" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Evaluierung IR" );
$tpl->assign( "module_mobile_title", "SELiM - IR 3" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "e-Maß" );

// Text
$tpl->assign( "text", "Um eine einzige Maßzahl zu gewinnen, die recall und precision kombiniert, kann man das e-Maß einsetzen. Berechnen Sie das e-Maß für 
beide Systeme für zwei Fälle, in denen entweder precision (ß = 0.5) oder recall (ß = 2.0) stärker gewichtet werden.<br />
<br />
Gib die Ergebnisse auf zwei Stellen gerundet in die Textfelder ein. <br />
<br />
<table class='table'>
	<thead>
		<tr>
			<th></th>
			<th>System S1</th>
			<th>System S2</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>recall</td>
			<td>0,4</td>
			<td>0,2</td>
		</tr>
		<tr>
			<td>precision</td>
			<td>0,29</td>
			<td>0,25</td>
		</tr>
	</tbody>
</table>
" );
// Richtige Lösungen
$tpl->assign( "loesung1", "0,69");
$tpl->assign( "loesung2", "0,76");
$tpl->assign( "loesung3", "0,63");
$tpl->assign( "loesung4", "0,79");

// Placeholderattribute für inputs
$tpl->assign( "placeholder1", "e (ß = 0,5) / S1");
$tpl->assign( "placeholder2", "e (ß = 0,5) / S2");
$tpl->assign( "placeholder3", "e (ß = 2,0) / S1");
$tpl->assign( "placeholder4", "e (ß = 2,0) / S2");


// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "input_Korrektur()");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Die Formel, die du brauchst, ist die folgenden:<br />
<img src='../../images/evaIR/emass.png' /> <br />


" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>