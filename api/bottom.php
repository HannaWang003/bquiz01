<?php
include_once "db.php";
if (isset($_POST['bottom'])) {
    $row = $Bottom->find(1);
    $row['bottom'] = $_POST['bottom'];
    $Bottom->save($row);
}
to("../back.php?do=bottom");
