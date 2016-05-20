<?php
include_once(get_defined_constants()["SELIMFILEBASE"]."config.inc.php");

// Erstelle Footernavigation

$sz_pfad = explode("/", $_SERVER['PHP_SELF']);
$sz_pagename = $sz_pfad[count($sz_pfad)-1];
$sz_curpage = array_search($sz_pagename,$sz_seiten) + 1;
$listOfPages = "";

for ($i = 0; $i < count($sz_seiten); $i++) {
	if($sz_seiten[$i] != $sz_pagename) {
		$listOfPages .= "<li><a href='".$sz_seiten[$i]."'>".($i+1)."</a></li>";
	}
}

$tpl->assign("footernav_cur_page", $sz_curpage);
$tpl->assign("footernav_all_pages", $listOfPages );

if($sz_curpage - 2 < 0) {
	$tpl->assign("footernav_prev", "# \" disabled=disabled" );
	$tpl->assign("footernav_first", "# \" disabled=disabled" );
} else {
	$tpl->assign("footernav_first", $sz_seiten[0] );
	$tpl->assign("footernav_prev", $sz_seiten[$sz_curpage - 2] );
}

if($sz_curpage >= count($sz_seiten)) {
	$tpl->assign("footernav_next", "# \" disabled=disabled" );
	$tpl->assign("footernav_last", "# \" disabled=disabled" );
} else {
	$tpl->assign("footernav_last", $sz_seiten[count($sz_seiten) - 1] );
	$tpl->assign("footernav_next", $sz_seiten[$sz_curpage] );
}
?>