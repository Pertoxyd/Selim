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

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Attribut</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Ein Attribut (Eigenschaft) beschreibt ein Wesensmerkmal, d.h. eine individuelle Besonderheit einer 
		<a href='#E'>Entität.</a> Die Attribute der Tabelle Studierende sind z.B. MatrikelNummer, Nachname, 
		Vorname, Geburtsdatum, usw.
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
$tpl->assign( "disableD", "");
$tpl->assign( "D", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Datenbank</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Unter einer Datenbank versteht man eine auf Dauer für flexiblen und sicheren Gebrauch ausgelegte 
		Datenorganisation, die sowohl eine Datenbasis als auch die zugehörige Datenverwaltung umfasst.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Datenmodell</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Ein Datenmodell legt die Eigenschaften, Struktur und Konsistenzbedingungen für in die Datenbank zu speichernde 
		Datenelemente fest.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Data Control Language (DCL)</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Die Data Control Language, dient der Steuerung von Zugriffsrechten auf die Datenbank. Mit der DCL können somit 
		Privilegien an Benutzer oder auch auf Objekte gezielt gesteuert werden.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Data Definition Language (DDL)</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Die Data Definition Language (Datendefinitionssprache) dient zur Einrichtung, Änderung oder Löschung von 
		Datenbankobjekten wie z. B. Tabellen, Indizes usw.<br/>
        <br/>
        Zu den DDL-Anweisungen gehören:<br/>
        <ul>
            <li>CREATE, um Tabellen zu erstellen.</li>
            <li>ALTER, um die Tabellenstruktur zu ändern, z.B. Hinzufügen einer Spalte.</li>
            <li>DROP, um Spalten oder auch Tabellen zu löschen.</li>
        </ul>        
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Data Manipulation Language (DML)</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Mit der Data Manipulation Language (Datenmanipulationssprache) können Daten selektiert, geändert und gelöscht 
		werden.<br/>
        <br/>
        Zu den wichtigsten Anweisungen gehören:<br/>
        <ul>
            <li>INSERT</li>
            <li>UPDATE</li>
            <li>DELETE</li>
        </ul>        
		</p>
	</div>
</div>
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
		<a class='toggleMoreInformation'><h4 class='panel-title'>Entitiy-Relationship-Modell (ERM)</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Entity-Relationship-Modelle werden zur Datenmodellierung genutzt.<br/>
        <br/>
        Die Elemente des ER-Modells sind:<br/>
        <ul>
            <li>Entitäten</li>
            <li>Entitätstyp</li>
            <li>Relationen</li>
            <li>Beziehungstyp</li>
        </ul>        
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Entität</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Als Entität (auch Informationsobjekt genannt, englisch entity) wird in der Datenmodellierung ein eindeutig 
		zu bestimmendes Objekt bezeichnet, über das Informationen gespeichert oder verarbeitet werden sollen. Das 
		Objekt kann materiell oder immateriell, konkret oder abstrakt sein. Beispiele: Ein Fahrzeug, ein Konto, eine 
		Person, ein Zustand.
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
$tpl->assign( "disableF", "");
$tpl->assign( "F", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Erschliessung</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>
		Ein Fremdschlüssel ist ein Attribut oder eine Attributkombination einer Relation, welches auf einen 
		Primärschlüssel (bzw. Schlüsselkandidaten) einer anderen oder der gleichen Relation verweist.
		</p>
	</div>
</div>

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
$tpl->assign( "disableK", "");
$tpl->assign( "K", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Konzeptionelles Datenmodell</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Das Konzeptionelle Datenmodell bildet den zu betrachtenden Realitätsausschnitt implementierungsunabhängig 
		ab, d.h. es wird nicht festgelegt mit welcher Programmiersprache die Datenbank umgesetzt werden muss bzw. 
		welche Datenbankart aus der Implementierung resultiert. Ein konzeptionelles Datenmodell, das sich als Standard 
		etabliert hat, ist das Entity-Relationship-Modell.</p>
	</div>
</div>
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

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Logisches Datenmodell</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Das logische Datenmodelle sind auf einen bestimmten Datenbanktyp, wie z.B. objektorientiert, hin 
		ausgerichtet. Das daraus resultierende Datenschema ist dementsprechend implementierungsabhängig. Ein Beispiel 
		für ein logisches Datenmodell ist das relationale Datenmodelll, mit dessen Hilfe eine relationale Datenbank 
		definiert wird.</p>
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

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Projektion</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Der ausgewählte Schlüsselkandidat, der in Folge für die Abbildung der Relationen verwendet wird. Die Werte 
		dieses Schlüssels werden in referenzierenden Tabellen als <a href='#F'>Fremdschlüssel</a> verwendet.</p>
	</div>
</div>


<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Projektion</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Die Projektion ist eine Auswahl bestimmter Attribute einer Relation (Spalten einer Tabelle) und 
		Unterdrückung der Information aus den nicht gewünschten Spalten.</p>
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
		<a class='toggleMoreInformation'><h4 class='panel-title'>Relationale Datenbank</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Eine relationale Datenbank verwendet Relationen oder zweidimensionale Tabellen zum Speichern von 
		Informationen.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Relationales Datenmodell</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Ein einem Relationalen Datenmodell werden die Daten in Tabellenform gespeichert, wobei jede Spalte der 
		Tabelle ein Datenelement bzw. ein Attribut repräsentiert. Jedem Dateielement wird ein einfacher Datentyp 
		zugeordnet. In jeder Tabellenzeile wird ein Datensatz gespeichert, der durch einen Primärschlüssel eindeutig 
		identifizierbar ist. Beziehungen zwischen mehreren Tabellen werden über Fremdschlüssel hergestellt.
		</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Relation</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Eine Relation (Beziehung) verbindet zwei oder mehrere <a href='#E'>Entitäten</a> wechselseitig miteinander.
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
$tpl->assign( "disableS", "d");
$tpl->assign( "S", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Schlüssel</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Ein Schlüssel dient in einer <a href='#R'>relationalen Datenbank</a> dazu, die <a href='#T'>Tupel</a> 
		(Datensätze) einer <a href='#R'>Relation</a> (Tabelle) eindeutig zu identifizieren, sie zu nummern. Ein 
		Schlüssel ist dann eine Gruppe von Spalten, die so ausgewählt wird, dass jede Tabellenzeile über den Werten 
		dieser Spaltengruppe eine einmalige Wertekombination hat.</p>
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Selektion</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Teilmengenbildung, d.h. Auswahl bestimmter Tupel in einer Relation (Zeilen einer Tabelle), die eine 
		vorgegebene Bedingung erfüllen.
	</div>
</div>
" );

// T
$tpl->assign( "disableT", "");
$tpl->assign( "T", "
<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Tabelle</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Tabellarische Darstellung eines Relationenschemas (Tabellenkopf) mit Relationen (Tabelleninhalt).
	</div>
</div>

<div class='panel panel-default'>
	<div class='panel-heading'>
		<a class='toggleMoreInformation'><h4 class='panel-title'>Tupel</h4></a>
	</div>	
	<div class='ausklappen hidden panel-body'>
		<p>Ein Tupel ist eine Zeile in einer Tabelle (Relation).</p>
	</div>
</div>
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