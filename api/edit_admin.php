<?php
include_once "db.php";
// dd($_POST);
// exit();
if (isset($_POST['id'])) {
} else {
    $Admin->save($_POST);
}
