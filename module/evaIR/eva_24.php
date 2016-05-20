<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_image_text.tpl");

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
$tpl->assign( "module_headline", "Kombination von Maßzahlen: e-Maß" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktKom.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "e-Maß" );
// Text
$tpl->assign( "text", "
Um eine einzige Maßzahl zu gewinnen, mit der IR-Systeme verglichen werden könnnen, müssen die beiden Standardmaße recall und precision miteinander 
verknüpft werden. Dies geschieht mit Hilfe des e-Maßes:<br />
<img src='../../images/evaIR/emass.png' />
<br />
Der Parameter ß wird je nach Situation gewählt. Er spiegelt die relative Wichtigkeit von recall und precision wieder. Bei ß = 0.5 (bzw. ß = 2.0) 
ist precision doppelt (bzw. halb) so stark gewichtet wie recall. Bei ß = 1.0 sind beide Maße gleich gewichtet. Der Wertebereich von e reicht von 0 bis 1. 
Je niedriger der ermittelte Wert, desto besser ist das System (1 ist am schlechtesten, 0 am besten).<br />
<br />
Falls r = 0 oder p = 0, ergibt sich immer e = 1. Man kann dem Ergebnis jedoch nicht entnehmen, welcher Wert dazu beiträgt!<br />
Falls r = p, ergeben sich auch bei variierendem ß immer gleiche Werte für e, da ß gekürzt werden kann.<br />
ß bewegt sich sinnvollerweise im Bereich von 0 bis 10.
" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>