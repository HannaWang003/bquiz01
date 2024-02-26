<?php
include_once "db.php";
//' OR 1=1;  <=SQL注入
//把檢查方式寫到db檔，並放入count funciton
// $acc = htmlspecialchars($_POST['acc']);
// $pw = htmlspecialchars($_POST['pw']);
$check = $Admin->count(['acc' => $_POST['acc'], 'pw' => md5($_POST['pw'])]);
if ($check > 0) {
    $_SESSION['acc'] = $_POST['acc'];
    to("../back.php");
} else {
    to("../index.php?do=login&err=登入錯誤");
}
