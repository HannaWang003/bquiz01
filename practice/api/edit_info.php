<?php
include_once "db.php";
$Total = ${ucfirst($_POST['table'])};
$data = $Total->find(1);
$data['total'] = $_POST['total'];
$Total->save($data);

?>