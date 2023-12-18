<?php
include_once "db.php";
$check = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
if ($check > 0) {
    $_SESSION['acc'] = $_POST['acc'];
    to("../back.php");
} else {
    to("../index.php?do=login&err=登入錯誤");
}
