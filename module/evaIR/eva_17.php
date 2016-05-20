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
$tpl->assign( "module_headline", "Beispiel zur Berechnung von recall und precision" );

// Text
$tpl->assign( "text", "Es liegen dir die Retrieval-Ergebnisse von zwei IR-Systemen vor. Dabei handelt es sich um eine Anfrage, die von beiden 
Systemen auf der Basis des selben Dokumentbestands ausgeführt wurden. Du möchtest beide Systeme hinsichtlich ihrer Effektivität vergleichen.<br />
Berechne bitte für beide Systeme recall und precision und trege die Werte (auf 2 Nachkommastellen gerundet) in die Tabelle ein! <br />
Es empfiehlt sich, alle Werte zu berechnen, da sie zu einem späteren Zeitpunkt wieder benötigt werden!<br />
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
			<td>a</td>
			<td>4</td>
			<td>2</td>
		</tr>
		<tr>
			<td>b</td>
			<td>10</td>
			<td>6</td>
		</tr>
		<tr>
			<td>relevante Dokumente insgesamt (Schätzung)</td>
			<td>10</td>
			<td>10</td>
		</tr>
	</tbody>
</table>
" );
// Richtige Lösungen
$tpl->assign( "loesung1", "0,4");
$tpl->assign( "loesung2", "0,2");
$tpl->assign( "loesung3", "0,29");
$tpl->assign( "loesung4", "0,25");

// Placeholderattribute für inputs
$tpl->assign( "placeholder1", "r-Wert von S1");
$tpl->assign( "placeholder2", "r-Wert von S2");
$tpl->assign( "placeholder3", "p-Wert von S1");
$tpl->assign( "placeholder4", "p-Wert von S2");


// Welche Javascript Methode soll die Inputs validieren?
$tpl->assign("ValidateFunction", "input_Korrektur()");

// Iwis Tipp
$tpl->assign( "iwisHeadline", "iWis Tipp" );
$tpl->assign( "iwisTipp", "
Die Formeln, die du dazu brauchst, sind die folgenden:<br />
<img src='../../images/evaIR/recall.gif' /> <br />
<img src='../../images/evaIR/precision.gif'' />

" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>