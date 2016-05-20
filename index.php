<?php
include("Template.class.php");

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_image_text.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "SELiM - Startseite" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Startseite" );
$tpl->assign( "module_mobile_title", "Startseite" );
// Überschrift der aktuellen Seite 
$tpl->assign( "module_headline", "Willkommen bei SELiM!" );

$tpl->assign( "text", "
SELiM ist eine interaktive Lernsoftware zu Inhalten aus der Informationswissenschaft. <br /><br />
Im Rahmen einer Abschlussarbeit wurden zwei Module neu konzeptioniert: Evaluierung von IR-Systemen und Maschinelle Übersetzung. 
Wir hoffen, dass dadurch die Benutzbarkeit auf mobilen Geräten vereinfacht wurde.<br />
Natürlich kannst du das System auch auf deinem Desktopcomputer ausprobieren.<br />
<br />
Viel Spaß und viel Erfolg dabei! :)
<br />
<br />
<img src='./images/start/logo_stiftung_universitaet_hildesheim.png' class='center-block' alt='Stiftung Universität Hildesheim' />
<br />
<br />
Möchtest du mehr über das Projekt SELiM erfahren? Hier erfährst du mehr: <a href='https://www.uni-hildesheim.de/fb3/institute/iwist/forschung/abgeschlossene-projekte/software-ergonomie-und-lernen-im-multimedialen-kontext-selim/'  target='_blank'>Zur Projektwebseite  <span class='glyphicon glyphicon-new-window'></span></a>
");
$tpl->assign( "image_path", "./images/start/iWi_normal_Siegel.gif");
$tpl->assign( "image_alt", "Dies ist iWi. Begleite ihn durch die Welt der Informationswissneschaften ");


// Footernavigation ausblenden
$tpl->assign( "hide", "hidden" );
// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "" );
$tpl->assign( "iwisTipp", "" );

// Und die Seite anzeigen
$tpl->display();
?>