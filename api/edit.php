<?php
include_once "db.php";
// dd($_POST);
// exit();
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);
foreach ($_POST['text'] as $id => $text) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        $row['text'] = $text;
        $row['sh'] = ($id == $_POST['sh']) ? 1 : 0;
        $DB->save($row);
    }
}
to("../back.php?do=$table");