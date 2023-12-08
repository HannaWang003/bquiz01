<?php
include_once "db.php";
$table = $_POST['table'];
$data = ${ucfirst($table)}->find(1);
// dd($data);
// exit();
$data[$table] = $_POST[$table];
${ucfirst($table)}->save($data);
to("../back.php?do={$table}");
