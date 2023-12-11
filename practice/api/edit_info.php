<?php
include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
$data = $DB->find(1);
$data['total'] = $_POST[$table];
$DB->save($data);
to("../back.php?do=$table");

?>