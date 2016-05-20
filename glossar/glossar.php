<?php
include("../Template.class.php");

$tpl = new Template();
$tpl->load("glossar/glossar.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Glossar" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Glossar" );
$tpl->assign( "module_mobile_title", "Glossar" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Glossar" );
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
$tpl->assign( "disable#", "disabled='disabled'");
$tpl->assign( "#", "

" );

// A
$tpl->assign( "disableA", "");
$tpl->assign( "A", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Anfragesprache</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Art und Weise, wie der Benutzer seine Anfrage in 
  einer dem System verst&auml;ndlichen Form formuliert (z.B. formal oder nat&uuml;rlichsprachlich). 
		</p>
	</div>
</div>
" );

// B
$tpl->assign( "disableB", "disabled='disabled'");
$tpl->assign( "B", "
Noch keine Einträge vorhanden
" );

// C
$tpl->assign( "disableC", "disabled='disabled'");
$tpl->assign( "C", "
Noch keine Einträge vorhanden
" );

// D
$tpl->assign( "disableD", "disabled='disabled'");
$tpl->assign( "D", "
Noch keine Einträge vorhanden
" );

// E
$tpl->assign( "disableE", "");
$tpl->assign( "E", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Effektivit&auml;t</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Effektivit&auml;t bezeichnet die Unterst&uuml;tzung, 
		  die das System dem Benutzer bei der L&ouml;sung seines Informationsproblems 
		  bietet.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Effizienz</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Effizienz bezeichnet die Nutzung von Systemressourcen 
	  (CPU-Zeit, Ein-/Ausgabe-Operationen, Speicherplatz, Antwortzeit) bei der Bew&auml;ltigung 
	  einer Aufgabe.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Elementarparameter</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Die Elementarparameter a, b, c, d enthalten die 
		  Anzahl der Dokumente, die sich in den einzelnen Teilmengen befinden, und dienen 
		  zur Berechnung von recall und precision.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Erschliessung</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Erschliessung ist neben dem Wiederauffinden eine 
		  Komponente des Information Retrieval. Es umfasst die Methoden Indexierung, Abstract-Erstellung 
		  und Clustering.
		</p>
	</div>
</div>

" );

// F
$tpl->assign( "disableF", "disabled='disabled'");
$tpl->assign( "F", "
Noch keine Einträge vorhanden
" );

// G
$tpl->assign( "disableG", "disabled='disabled'");
$tpl->assign( "G", "
Noch keine Einträge vorhanden
" );

// H
$tpl->assign( "disableH", "disabled='disabled'");
$tpl->assign( "H", "
Noch keine Einträge vorhanden
" );

// I
$tpl->assign( "disableI", "");
$tpl->assign( "I", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>IR-Systeme</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<blockquote>
			<p>
			'An information retrieval system is an information 
			 system, that is, a system used to store items of informations that need to be 
			 processed, searched, retrieved, and disseminated to various user populations.' 
			(Salton/McGill 1983, XI)
			</p>
		</blockquote>
	</div>
</div>
" );

// J
$tpl->assign( "disableJ", "disabled='disabled'");
$tpl->assign( "J", "
Noch keine Einträge vorhanden
" );

// K
$tpl->assign( "disableK", "disabled='disabled'");
$tpl->assign( "K", "
Noch keine Einträge vorhanden
" );

// L
$tpl->assign( "disableL", "");
$tpl->assign( "L", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Leere Antwortmenge</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Das System liefert keine Dokumente als Ergebnis.</p>
	</div>
</div>
" );

// M
$tpl->assign( "disableM", "disabled='disabled'");
$tpl->assign( "M", "
Noch keine Einträge vorhanden
" );

// N
$tpl->assign( "disableN", "");
$tpl->assign( "N", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Nullantwort</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Das System liefert keine relevanten Dokumente. Dabei 
		  muss man unterscheiden, ob in der Dokumentmenge relevante Dokumente existieren 
		  (negative Nullantwort) oder nicht (positive Nullantwort).</p>
	</div>
</div>
" );

// O
$tpl->assign( "disableO", "disabled='disabled'");
$tpl->assign( "O", "
Noch keine Einträge vorhanden
" );

// P
$tpl->assign( "disableP", "");
$tpl->assign( "P", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Pooling-Methode</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
	<p>Die Pooling-Methode dient dazu, einen Sch&auml;tzwert 
	f&uuml;r die Anzahl der Dokumente im Dokumentbestand zu ermitteln, die f&uuml;r 
	eine bestimmte Anfrage relevant sind. Dabei werden die relevanten Dokumente, 
	die von verschiedenen Systemen f&uuml;r die gleiche Anfrage geliefert werden, 
	zu einer Menge vereinigt. Mehrfach vorkommende Dokumente werden jedoch nur einmal 
	gez&auml;hlt.</p>
	<p>Beispiel:</p>
    <p>System1 liefert die relevanten Dokumente a1, b3, a4, c5</p>
	<p>System2 liefert die relevanten Dokumente a1, a2, b2, a4, c5, a7, a8 </p>
	<p>Alle relevanten Dokumente zusammen sind a1, a2, a4, a7, a8, b2, b3, c5</p>
	</div>
</div>
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Precision</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Quotient aus allen gefundenen relevanten Dokumenten und allen gefundenen Dokumenten.</p>
		<img src='../images/evaIR/precision.gif' class='img-responsive' />
		<p>Precision beschreibt die Genauigkeit eines Ergebnisses.</p>
	</div>
</div>
" );

// Q
$tpl->assign( "disableQ", "disabled='disabled'");
$tpl->assign( "Q", "
Noch keine Einträge vorhanden
" );

// R
$tpl->assign( "disableR", "disabled='disabled'");
$tpl->assign( "R", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Ranking-Systeme</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Ranking-Systeme ordnen die von ihnen selektierten 
  Dokumente nach der Relevanz. Voraussetzung daf&uuml;r ist eine gewichtete Indexierung.</p>
	</div>
</div>
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Recall</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Quotient aus allen relevanten gefundenen Dokumenten und allen relevanten Dokumenten.</p>
		<img src='../images/evaIR/recall.gif' class='img-responsive' />
		<p>Recall beschreibt die Vollst&auml;ndigkeit eines Ergebnisses. </p>
	</div>
</div>
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Recall-Precision-Graph</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Graphische Darstellung der Beziehung von recall 
		  und precision bei ranking-Systemen. Dabei wird die Liste der nachgewiesenen 
		  Dokumente abgearbeitet, und nach jedem Dokument werden r und p auf der Basis 
		  aller bislang betrachteten Dokumente berechnet. Die Wertepaare werden in ein 
		  Koordinatensystem eingetragen.
		</p>
	</div>
</div>
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Relevanz</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Relevanz bedeutet, dass ein Dokument dazu in der Lage ist, zur L&ouml;sung des Informationsproblems 
  eines Informationssuchenden beizutragen.</p>
	</div>
</div>
" );

// S
$tpl->assign( "disableS", "disabled='disabled'");
$tpl->assign( "S", "
Noch keine Einträge vorhanden
" );

// T
$tpl->assign( "disableT", "disabled='disabled'");
$tpl->assign( "T", "
Noch keine Einträge vorhanden
" );

// U
$tpl->assign( "disableU", "disabled='disabled'");
$tpl->assign( "U", "
Noch keine Einträge vorhanden
" );

// V
$tpl->assign( "disableV", "disabled='disabled'");
$tpl->assign( "V", "
Noch keine Einträge vorhanden
" );

// W
$tpl->assign( "disableW", "disabled='disabled'");
$tpl->assign( "W", "
Noch keine Einträge vorhanden
" );

// X
$tpl->assign( "disableX", "disabled='disabled'");
$tpl->assign( "X", "
Noch keine Einträge vorhanden
" );

// Y
$tpl->assign( "disableY", "disabled='disabled'");
$tpl->assign( "Y", "
Noch keine Einträge vorhanden
" );

// Z
$tpl->assign( "disableZ", "disabled='disabled'");
$tpl->assign( "Z", "
Noch keine Einträge vorhanden
" );

// +
$tpl->assign( "disable+", "disabled='disabled'");
$tpl->assign( "Plus", "
Noch keine Einträge vorhanden
" );

$tpl->display();
?>