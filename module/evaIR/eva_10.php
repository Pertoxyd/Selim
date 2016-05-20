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
$tpl->assign( "module_headline", "Wichtig für den recall" );

// Bildpfad
$tpl->assign( "image_path", "../../images/evaIR/struktRec.gif" );
//Bild Alt Attribut
$tpl->assign( "image_alt", "Recall" );
// Text
$tpl->assign( "text", "
Bei der Berechnung des recall ist der Elementarparameter c in der Regel unbekannt und muss geschätzt werden (z.B. mit der Pooling-Methode ). <br />
Bei sehr großen Ergebnismengen ist es nicht immer möglich, <span style='color: #00CC66'>a</span> genau zu bestimmen, da nicht alle Dokumente gesichtet werden können. Daher wird die 
Ergebnismenge häufig 'abgeschnitten' (cut off).<br />
Wertebereich: 0 bis 1; ein guter Wert ist 1, ein schlechter Wert ist 0.<br />
Idealerweise sollte das System alle relevanten Dokumente finden. Dieses Ziel ist allerdings unrealistisch. Ein guter Wert für ein System liegt bei 60%.<br />
Recall alleine berücksichtigt den Ballast nicht, den die Antwortmenge enthält. Deshalb muss der precision-Wert miteinbezogen werden. Zu diesem Zweck 
versucht man, die beiden Maße zu <span style='color: #00CC66'>koordinieren</span>.<br />
Bei ranking-Systemen sagt recall nichts darüber aus, wie gut das System die Dokumente sortiert hat.
" );

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