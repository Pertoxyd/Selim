<?php
include_once(get_defined_constants()["SELIMFILEBASE"]."config.inc.php");

// Erstelle Footernavigation

$sz_pfad = explode("/", $_SERVER['PHP_SELF']);
$sz_pagename = $sz_pfad[count($sz_pfad)-1];
$sz_curpage = array_search($sz_pagename,$sz_seiten) + 1;
$listOfPages = "";

for ($i = 0; $i < count($sz_seiten); $i++) {
	if($sz_seiten[$i] != $sz_pagename) {
		$listOfPages .= "<tr><td>".$sz_chapternames[$i]."</td><td><a href='".$sz_seiten[$i]."'>Zur Seite</a></td></tr>";
	}
}

$tpl->assign("inhaltsverzeichnis", $listOfPages );
?>