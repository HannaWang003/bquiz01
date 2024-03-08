<?php
$total=$DB->count();
$div=4;
$pages = ceil($total/$div);
$now = ($_GET['p'])??1;
$start=($pages-1)*$div;
$rows = $DB->all("limit $start,$div");


?>