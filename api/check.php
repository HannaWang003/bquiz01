<?php
include_once "db.php";
//' OR 1=1;  <=SQL注入
//把檢查方式寫到db檔，並放入count funciton
// $acc = htmlspecialchars($_POST['acc']);
// $pw = htmlspecialchars($_POST['pw']);
$check = $Admin->count(['acc' => $acc, 'pw' => $pw]);
if ($check > 0) {
    $_SESSION['acc'] = $acc;
    to("../back.php");
} else {
    to("../index.php?do=login&err=登入錯誤");
}
