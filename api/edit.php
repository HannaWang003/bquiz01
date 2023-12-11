<?php
include_once "db.php";
// dd($_POST);
// exit();
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);

if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $id) {
        $_POST['text'][$id] = '';
    }
}
foreach ($_POST['text'] as $id => $text) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        if (isset($row['text'])) {
            $row['text'] = $text;
        }
        if ($table == 'title') {
            $row['sh'] = ($id == $_POST['sh']) ? 1 : 0;
        } else {
            $row['sh'] = (in_array($id, $_POST['sh'])) ? 1 : 0;
        }
        //
        if ($table == 'admin') {
            unset($_POST['pw2']);
        }
        $DB->save($row);
    }
}
to("../back.php?do=$table");
