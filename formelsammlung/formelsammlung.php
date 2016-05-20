<?php
include("../Template.class.php");

$tpl = new Template();
$tpl->load("formelsammlung/formelsammlung.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Formelsammlung" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Formelsammlung" );
$tpl->assign( "module_mobile_title", "Formelsammlung" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Formelsammlung" );
// Footernavigation ausblenden
$tpl->assign( "hide", "hidden" );
// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "" );
$tpl->assign( "iwisTipp", "" );


// #
$tpl->assign( "#", "

" );

// A
$tpl->assign( "A", "
Noch keine Einträge vorhanden
" );

// B
$tpl->assign( "B", "
Noch keine Einträge vorhanden
" );

// C
$tpl->assign( "C", "
Noch keine Einträge vorhanden
" );

// D
$tpl->assign( "D", "
Noch keine Einträge vorhanden
" );

// E
$tpl->assign( "disableE", "");
$tpl->assign( "E", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>e-Maß nach Van Rijsbergen</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Mit Hilfe des e-Maßes kann aus recall und precision eine einzige 
		Maßzahl errechnet werden. Die Zahl ß wird je nach Situation gewählt. 
		Das Verhalten von r, p und e muß bekannt sein.
		</p>
		<img src='../images/evaIR/emass.PNG' class='center-block' alt='Die Formel für das e-Maß nach Van Rijsbergen' />
		<p class='bg-danger padding'>
		Achtung:<br />
		Falls r = 0 oder p = 0, ergibt sich immer e = 1. Man kann dem Ergebnis jedoch nicht entnehmen, welcher Wert dazu beiträgt!<br />
		Falls r = p, ergeben sich auch bei variierendem ß immer gleiche Werte für e, da ß gekürzt werden kann.
		</p>
	</div>
</div>

" );

// F
$tpl->assign( "F", "
Noch keine Einträge vorhanden
" );

// G
$tpl->assign( "G", "
Noch keine Einträge vorhanden
" );

// H
$tpl->assign( "H", "
Noch keine Einträge vorhanden
" );

// I
$tpl->assign( "I", "
Noch keine Einträge vorhanden
" );

// J
$tpl->assign( "J", "
Noch keine Einträge vorhanden
" );

// K
$tpl->assign( "K", "
Noch keine Einträge vorhanden
" );

// L
$tpl->assign( "L", "
Noch keine Einträge vorhanden
" );

// M
$tpl->assign( "M", "
Noch keine Einträge vorhanden
" );

// N
$tpl->assign( "N", "
Noch keine Einträge vorhanden
" );

// O
$tpl->assign( "O", "
Noch keine Einträge vorhanden
" );

// P
$tpl->assign( "P", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Precision</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Precision beschreibt das Verhältnis der gefundenen relevanten Dokumente zu allen gefundenen Dokumenten.</p>
		<img src='../images/evaIR/precision.gif' class='img-responsive center-block' alt='Die Formel der precision' />
		<p>Wertebereich: 0 - 1</p>
		<p>Elementarparameter:</p> <br />
		<img src='../images/evaIR/VennKlein.gif' class='img-responsive center-block' alt='Die Elementarparameter' />
	</div>
</div>
" );

// Q
$tpl->assign( "Q", "
Noch keine Einträge vorhanden
" );

// R
$tpl->assign( "R", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Recall</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Recall beschreibt das Verhältnis der gefundenen relevanten Dokumente zu allen relevanten Dokumenten einer Dokumentmenge.</p>
		<img src='../images/evaIR/recall.gif' class='img-responsive center-block' alt='Die Formel des recalls' />
		<p>Wertebereich: 0 - 1</p>
		<p>Elementarparameter:</p> <br />
		<img src='../images/evaIR/VennKlein.gif' class='img-responsive center-block' alt='Die Elementarparameter' />
	</div>
</div>
" );

// S
$tpl->assign( "S", "
Noch keine Einträge vorhanden
" );

// T
$tpl->assign( "T", "
Noch keine Einträge vorhanden
" );

// U
$tpl->assign( "U", "
Noch keine Einträge vorhanden
" );

// V
$tpl->assign( "V", "
Noch keine Einträge vorhanden
" );

// W
$tpl->assign( "W", "
Noch keine Einträge vorhanden
" );

// X
$tpl->assign( "X", "
Noch keine Einträge vorhanden
" );

// Y
$tpl->assign( "Y", "
Noch keine Einträge vorhanden
" );

// Z
$tpl->assign( "Z", "
Noch keine Einträge vorhanden
" );

// +
$tpl->assign( "Plus", "
Noch keine Einträge vorhanden
" );

$tpl->display();
?>