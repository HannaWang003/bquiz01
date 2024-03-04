<?php
include_once "db.php";
if ($_POST['acc'] == 'admin' && $_POST['pw'] == '1234') {
    $_SESSION['mag'] = $_POST['acc'];
    to("../back.php");
} else {
    to("../index.php?do=login&error=帳號或密碼輸入錯誤");
}
