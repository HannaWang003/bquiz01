<?php
include_once "db.php";
// dd($_POST);
// exit();
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $idx => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $Admin->del($id);
        } else {
            $row = $Admin->find($id);
            $row['acc'] = $_POST['acc'][$idx];
            $row['pw'] = $_POST['pw'][$idx];
            $Admin->save($row);
        }
        to('../back.php?do=admin');
    }
} else {
    $Admin->save($_POST);
}
